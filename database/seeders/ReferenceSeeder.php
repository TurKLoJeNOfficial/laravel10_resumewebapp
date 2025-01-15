<?php

namespace Database\Seeders;

use App\Models\Reference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reference::create([
            'name'=>'TurKLoJeN',
            'company' => 'cOMPANY',
            'title' => 'Laravel Developer',
            'mail'=>'mail@example.com',
            'phone'=>'+90 111 111 11 11'
        ]);

    }
}
