<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function courses()
    {
        $courses = Course::all();

        return view('datapresensi', [
            'courses' => $courses
        ]);
    }
}
