<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\ResponseBase;
use App\Models\CourseSchedule;
use App\Models\Presence;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class PresenceController extends Controller
{
    public function index(CourseSchedule $courseSchedule)
    {
        if($courseSchedule->status == 'Tutup'){
            return back()->with('error', 'Presensi Sedang Ditutup!');
        }
        return view('presensi', ['presence' => $courseSchedule]);
    }

    public function listPresensi($id){
        $presences = Presence::where('course_schedule_id', $id)->get();
        return view('listPresensi', ['presences' => $presences]);
    }

    public function presence(Request $request)
    {
        $rules = [
            'absentType' => 'required|string|in:Hadir,Sakit,Izin',
            'course_schedule_id' => 'required|integer|exists:course_schedules,id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return ResponseBase::error($validator->errors(), 422);

        try {
            $presence = new Presence();
            $presence->status = $request->absentType;
            $presence->user_id = Auth::user()->id;
            $presence->course_schedule_id = $request->course_schedule_id;
            $presence->save();

            return redirect('/home');
        } catch (\Exception $e) {
            return ResponseBase::error('Gagal menambahkan data presence!', 409);
        }
    }
}