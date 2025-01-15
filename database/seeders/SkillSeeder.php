<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'skill'=>'Laravel',
            'ratio'=>40
        ]);
        Skill::create([
            'skill'=>'Php',
            'ratio'=>60
        ]);
    }
}
