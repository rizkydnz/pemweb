<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Pelanggan::count() ==0){
        Pelanggan::create([
            'nama' => 'Rizky',
            'email' => 'rizky@example.com',
            'kontak' => '1234567890',
        ]);
        }
    }
}
