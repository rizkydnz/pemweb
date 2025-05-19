<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Produk::count() ==0){
        Produk::create([
            'nama' => 'Sepatu',
            'deskripsi' => 'Adidas',
            'harga' => 1250000,
            'image' => '',
        ]);
        }
    }
}
