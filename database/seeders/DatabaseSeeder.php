<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PwdReport;
use App\Models\PwdFamilyComposition;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     PwdReportSeeder::class,
        //     PwdFamilyCompositionSeeder::class
        //     VawcReportSeeder::class
        // ]);

        PwdReport::factory()
            ->count(3)
            ->has(PwdFamilyComposition::factory(), 'familyMembers')
            ->create();
    }
}
