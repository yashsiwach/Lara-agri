<?php

namespace Database\Seeders;

use App\Models\Scheme;
use Illuminate\Database\Seeder;

class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing schemes before seeding
       

        Seeder::factory()->create([
                'title' => 'Pradhan Mantri Kisan Samman Nidhi (PM-KISAN)',
                'description' => 'A central government scheme to provide income support to all farmer families across the country.',
                'link' => 'https://pmkisan.gov.in/',
          
        ]);

       
    }
}
