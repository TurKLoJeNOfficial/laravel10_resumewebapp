<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certificate::create([
            'title'=>'Example',
            'date' =>'01.01.2024',
            'url'=>'www.example.com',
            'description'=>'Lorem ipsum',
        ]);
    }
}
