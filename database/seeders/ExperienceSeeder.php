<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'title'=>'Example',
            'company'=>'Company',
            'company_url'=>'exampla.com',
            'start_date'=>'April 2015',
            'finish_date'=>'January 2017',
            'description' =>'Lorem ipsum'
        ]);
    }
}
