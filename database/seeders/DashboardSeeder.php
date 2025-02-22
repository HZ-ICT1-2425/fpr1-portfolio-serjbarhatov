<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Test;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Seed the application's database with dashboard data.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ['cu_code' => 'CU75001V3', 'quarter' => '1', 'name' => 'Program & Career Orientation', 'credits' => 2.5],
            ['cu_code' => 'CU75002V2', 'quarter' => '1', 'name' => 'Computer Science Basics', 'credits' => 5],
            ['cu_code' => 'CU75003V1', 'quarter' => '1', 'name' => 'Programming Basics', 'credits' => 5],
            ['cu_code' => 'CU75068V3', 'quarter' => '1-4', 'name' => 'Personal Professional Development Exploration', 'credits' => 12.5],
            ['cu_code' => 'CU75004V1', 'quarter' => '2', 'name' => 'Object-Oriented Programming', 'credits' => 10],
            ['cu_code' => 'CU75080V1', 'quarter' => '3', 'name' => 'Framework project 1', 'credits' => 10],
            ['cu_code' => 'CU75081V1', 'quarter' => '3&4', 'name' => 'Business IT Consultancy basics', 'credits' => 2.5],
            ['cu_code' => 'CU75011V3', 'quarter' => '4', 'name' => 'Framework project 2', 'credits' => 10],
        ];

        $testsData = [
            'CU75001V3' => ['Assessment website'],
            'CU75002V2' => ['Written exam'],
            'CU75003V1' => ['Case study exam'],
            'CU75068V3' => ['Criterium focused interview'],
            'CU75004V1' => ['Group assignment', 'Case study exam'],
            'CU75080V1' => ['On-site case study exam', 'Database exam', 'Group presentation on project result', 'Group portfolio with individual elements on requirements'],
            'CU75081V1' => ['Video'],
            'CU75011V3' => ['Final delivery', 'Report of acceptance tests and optional assessments', 'IT Development portfolio'],
        ];

        foreach ($courses as $courseData) {
            $course = Course::create($courseData);

            $cuCode = $courseData['cu_code'];
            if (isset($testsData[$cuCode])) {
                foreach ($testsData[$cuCode] as $testName) {
                    Test::create([
                        'course_id' => $course->id,
                        'name' => trim($testName),
                        'weighing_factor' => 1 / count($testsData[$cuCode]),
                    ]);
                }
            }
        }
    }
}
