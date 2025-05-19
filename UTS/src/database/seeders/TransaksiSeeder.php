<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {
        if (Transaksi::count() == 0 && Pelanggan::count() > 0 && Produk::count() > 0) {
            $pelanggan = Pelanggan::first();
            $produk = Produk::first();

            Transaksi::create([
                'pelanggan_id' => $pelanggan->id,
                'produk_id' => $produk->id,
                'Jumlah' => 2,
                'Total_Harga' => $produk->harga * 2,
            ]);
        }
    }
}
