<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSchedule;

class CourseScheduleController extends Controller
{
    public function detail(Course $course)
    {
        $course = $course->load('schedules');

        return view('formpresensi', [
            'course' => $course
        ]);
    }

    public function open(Course $course)
    {
        $course->schedules()->update([
            'status' => 'Buka'
        ]);

        $course = $course->load('schedules');

        return view('formpresensi', [
            'course' => $course
        ]);
    }

    public function close(Course $course)
    {
        $course->schedules()->update([
            'status' => 'Tutup'
        ]);

        $course = $course->load('schedules');

        return view('formpresensi', [
            'course' => $course
        ]);
    }

    public function delete(Course $course)
    {
        $course->schedules()->delete();

        $course = $course->load('schedules');

        return view('formpresensi', [
            'course' => $course
        ]);
    }

    public function reset(Course $course)
    {
        $course->schedules()->delete();
        
        CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course->id
        ]);

        CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.39)',
            'course_id' => $course->id
        ]);

        CourseSchedule::create([
            'schedule' => 'Jumat (12.50 - 15.19)',
            'course_id' => $course->id
        ]);

        $course = $course->load('schedules');

        return view('formpresensi', [
            'course' => $course
        ]);
    }
}