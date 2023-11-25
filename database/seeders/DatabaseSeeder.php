<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\CourseSchedule;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Seeder
        User::create([
            'name' => 'Phasa',
            'nim' => '21515707111234',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Alea',
            'nim' => '21515707111235',
            'password' => bcrypt('password')
        ]);

        // Course Seeder
        $course1 = Course::create([
            'name' => 'Bahasa Inggris'
        ]);

        $course2 = Course::create([
            'name' => 'Bahasa Indonesia'
        ]);

        $course3 = Course::create([
            'name' => 'Pemrograman Dasar'
        ]);

        $course4 = Course::create([
            'name' => 'Data Mining'
        ]);

        $course5 = Course::create([
            'name' => 'Basis Data'
        ]);

        $course6 = Course::create([
            'name' => 'Jaringan Komputer'
        ]);

        // Course 1 Schedule Seeder
        $courseSchedule1 = CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course1->id
        ]);

        $courseSchedule2 = CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.39)',
            'course_id' => $course1->id
        ]);

        $courseSchedule3 = CourseSchedule::create([
            'schedule' => 'Jumat (12.50 - 15.19)',
            'course_id' => $course1->id
        ]);

        $courseSchedule4 = CourseSchedule::create([
            'schedule' => 'Selasa (15.30 - 18.09)',
            'course_id' => $course1->id
        ]);

        // Course 2 Schedule Seeder
        $courseSchedule5 = CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course2->id
        ]);

        $courseSchedule6 = CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.39)',
            'course_id' => $course2->id
        ]);

        $courseSchedule7 = CourseSchedule::create([
            'schedule' => 'Jumat (12.50 - 15.19)',
            'course_id' => $course2->id
        ]);

        $courseSchedule8 = CourseSchedule::create([
            'schedule' => 'Selasa (15.30 - 18.09)',
            'course_id' => $course2->id
        ]);

        // Course 3 Schedule Seeder
        $courseSchedule5 = CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course3->id
        ]);

        $courseSchedule6 = CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.39)',
            'course_id' => $course3->id
        ]);

        $courseSchedule7 = CourseSchedule::create([
            'schedule' => 'Jumat (12.50 - 15.19)',
            'course_id' => $course3->id
        ]);

        $courseSchedule8 = CourseSchedule::create([
            'schedule' => 'Selasa (15.30 - 18.09)',
            'course_id' => $course3->id
        ]);

        // Course 4 Schedule Seeder
        $courseSchedule5 = CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course4->id
        ]);

        $courseSchedule6 = CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.49)',
            'course_id' => $course4->id
        ]);

        $courseSchedule7 = CourseSchedule::create([
            'schedule' => 'Jumat (12.50 - 15.19)',
            'course_id' => $course4->id
        ]);

        $courseSchedule8 = CourseSchedule::create([
            'schedule' => 'Selasa (15.40 - 18.09)',
            'course_id' => $course4->id
        ]);

        // Course 5 Schedule Seeder
        $courseSchedule5 = CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course5->id
        ]);

        $courseSchedule6 = CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.39)',
            'course_id' => $course5->id
        ]);

        $courseSchedule7 = CourseSchedule::create([
            'schedule' => 'Jumat (12.30 - 15.19)',
            'course_id' => $course5->id
        ]);

        $courseSchedule8 = CourseSchedule::create([
            'schedule' => 'Selasa (15.30 - 18.09)',
            'course_id' => $course5->id
        ]);

        // Course 6 Schedule Seeder
        $courseSchedule5 = CourseSchedule::create([
            'schedule' => 'Senin (09.30 - 11.59)',
            'course_id' => $course6->id
        ]);

        $courseSchedule6 = CourseSchedule::create([
            'schedule' => 'Rabu (07.00 - 08.39)',
            'course_id' => $course6->id
        ]);

        $courseSchedule7 = CourseSchedule::create([
            'schedule' => 'Jumat (12.50 - 15.19)',
            'course_id' => $course6->id
        ]);

        $courseSchedule8 = CourseSchedule::create([
            'schedule' => 'Selasa (15.30 - 18.09)',
            'course_id' => $course6->id
        ]);
    }
}
