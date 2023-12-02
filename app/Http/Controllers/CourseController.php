<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function courses()
    {
        $courses = Auth::user()->role == 1 ? Course::where('lecturer_id', Auth::user()->id)->get() : Course::all();

        return view('datapresensi', [
            'courses' => $courses
        ]);
    }
}
