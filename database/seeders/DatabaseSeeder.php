<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LaratrustSeeder::class,
            UsersTableSeeder::class,
            ClassTableSeeder::class,
            TermsTableSeeder::class,
            FeeTableSeeder::class,
            StudentsTableSeeder::class,
            PaymentsTableSeeder::class,
        ]);
    }
}
