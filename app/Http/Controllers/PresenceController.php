<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\ResponseBase;
use App\Models\Presence;
use Illuminate\Support\Facades\Validator;

class PresenceController extends Controller
{
    public function presence(Request $request)
    {
        $rules = [
            'status' => 'required|string|in:Hadir,Sakit,Izin',
            'user_id' => 'required|integer|exists:users,id',
            'course_schedule_id' => 'required|integer|exists:course_schedules,id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return ResponseBase::error($validator->errors(), 422);

        try {
            $presence = new Presence();
            $presence->status = $request->status;
            $presence->user_id = $request->user_id;
            $presence->course_schedule_id = $request->course_schedule_id;
            $presence->save();

            return ResponseBase::success("Berhasil menambahkan data presence!", $presence);
        } catch (\Exception $e) {
            return ResponseBase::error('Gagal menambahkan data presence!', 409);
        }
    }
}
