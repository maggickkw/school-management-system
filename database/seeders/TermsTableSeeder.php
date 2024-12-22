<?php

namespace Database\Seeders;

use App\Models\StudentClass;
use App\Models\Term;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    public function run()
    {
        $terms = [
            ['name' => 'Term 1', 'start_date' => Carbon::now(), 'end_date' => Carbon::now()->addMonths(4), 'class_id' => StudentClass::inRandomOrder()->first()->id],
            ['name' => 'Term 2', 'start_date' => Carbon::now(), 'end_date' => Carbon::now()->addMonths(4), 'class_id' => StudentClass::inRandomOrder()->first()->id],
            ['name' => 'Term 3', 'start_date' => Carbon::now(), 'end_date' => Carbon::now()->addMonths(4), 'class_id' => StudentClass::inRandomOrder()->first()->id],

        ];

        foreach ($terms as $term) {
            Term::create($term);
        }
    }
}
