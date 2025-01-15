<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SkillSeeder::class,
            LanguageSeeder::class,
            ReferenceSeeder::class,
            ExperienceSeeder::class,
            CertificateSeeder::class,
            EducationSeeder::class,
            ProjectSeeder::class,
            SettingSeeder::class,
            SocialMediaSeeder::class,
        ]);

    }
}
