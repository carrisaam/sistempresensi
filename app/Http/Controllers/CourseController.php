<?php

namespace App\Http\Controllers;

use App\Libraries\ResponseBase;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return ResponseBase::success('Berhasil menerima data course', $courses);
    }
}
