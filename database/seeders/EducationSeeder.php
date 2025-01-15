<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'school_name'=>'Example',
            'start_date'=>'April 2013',
            'finish_date'=>'January 2017',
            'description'=>'Lorem ipsum'
        ]);
    }
}
