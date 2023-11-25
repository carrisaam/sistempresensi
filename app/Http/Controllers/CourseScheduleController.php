<?php

namespace App\Http\Controllers;

use App\Libraries\ResponseBase;
use App\Models\CourseSchedule;

class CourseScheduleController extends Controller
{
    public function detail(CourseSchedule $courseSchedule)
    {
        return ResponseBase::success('Berhasil menerima data course schedule', $courseSchedule);
    }
}
