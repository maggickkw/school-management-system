<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentClass;

class ClassTableSeeder extends Seeder
{
    public function run()
    {
        $classes = [
            ['name' => 'Grade 1'],
            ['name' => 'Grade 2'],
            ['name' => 'Grade 3'],
            ['name' => 'Grade 4'],
            ['name' => 'Grade 5'],
        ];

        foreach ($classes as $class) {
            StudentClass::create($class);
        }
    }
}