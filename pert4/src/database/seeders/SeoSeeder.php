<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seo::create([
            'title' => 'PemWeb',
            'description' => 'This is a sample PemWeb description.',
            'keywords' => 'sample, seo, keywords',
            'canonical_url' => 'https://seo.com',
            'robots' => 'index, follow',
            'og_image' => '',
        ]);
    }
}