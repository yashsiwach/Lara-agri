<?php

namespace Database\Seeders;

use App\Models\InformationPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InformationPage::create([
            'title' => 'Crop Information',
            'slug' => 'crop-information',
            'content' => '<p>Information about major crops grown in India...</p>
                <ul>
                    <li>Rice</li>
                    <li>Wheat</li>
                    <li>...</li>
                </ul>',
        ]);

        InformationPage::create([
            'title' => 'Livestock Information',
            'slug' => 'livestock-information',
            'content' => '<p>Information about livestock in India...</p>
                <ul>
                    <li>Cattle</li>
                    <li>Buffalo</li>
                    <li>...</li>
                </ul>',
        ]);
        InformationPage::create([
            'title' => 'Soil Health',
            'slug' => 'soil-health',
            'content' => '<p>Information about Soil Health...</p><ul><li>Soil Testing</li><li>Balanced Fertilisers</li></ul>'
        ]);
         InformationPage::create([
            'title' => 'Water Management',
            'slug' => 'water-management',
            'content' => '<p>Information about Water Management...</p><ul><li>Drip Irrigation</li><li>Rainwater Harvesting</li></ul>'
        ]);
    }
}