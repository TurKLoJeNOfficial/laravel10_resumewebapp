<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'image' => 'img/resim.jpg',
            'name' => 'TurKLoJeN',
            'username' => 'turklojen',
            'email' => 'mail@example.com',
            'password' => bcrypt('admin'),
            'title' => 'Web Developer',
            'address' => 'Turkey',
            'phone' => '+90 111 111 1111',
        ]);
    }
}
