<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            'title' => Str::random(20),
            'category' => Str::random(5),
            'salary' => rand(10000,50000),
            'type' => Str::random(3),
            'description' => Str::random(100),
            'company_name' => Str::random(10),
            'location' => Str::random(10)
        ]);
    }
}
