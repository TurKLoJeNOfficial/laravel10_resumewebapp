<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'title'=>'Site Title',
            'description'=>'Description',
            'keyword'=>'Keywords',
            'author'=>'TurKLoJeN',
            'color'=>'black',
            'music'=>'',
            'footer'=>'Powered by TurKLoJeN'
        ]);
    }
}
