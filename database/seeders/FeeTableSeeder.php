<?php

namespace Database\Seeders;

use App\Models\Fee;
use App\Models\StudentClass;
use App\Models\Term;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeTableSeeder extends Seeder
{
    public function run()
    {
        $fees = [
            ['class_id' => StudentClass::inRandomOrder()->first()->id, 'term_id' => Term::inRandomOrder()->first()->id, 'amount' => 15000],
            ['class_id' => StudentClass::inRandomOrder()->first()->id, 'term_id' => Term::inRandomOrder()->first()->id, 'amount' => 16000],
            ['class_id' => StudentClass::inRandomOrder()->first()->id, 'term_id' => Term::inRandomOrder()->first()->id, 'amount' => 17000],
            ['class_id' => StudentClass::inRandomOrder()->first()->id, 'term_id' => Term::inRandomOrder()->first()->id, 'amount' => 20000],
        ];

        foreach ($fees as $fee) {
            Fee::create($fee);
        }
    }
}
