<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\StudentClass;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['name' => 'Alice', 'class_id' =>  StudentClass::inRandomOrder()->first()->id, 'parent_id' =>  User::inRandomOrder()->first()->id],
            ['name' => 'Bob', 'class_id' =>  StudentClass::inRandomOrder()->first()->id, 'parent_id' => User::inRandomOrder()->first()->id],
            ['name' => 'Charlie', 'class_id' =>  StudentClass::inRandomOrder()->first()->id, 'parent_id' => User::inRandomOrder()->first()->id],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }

}
