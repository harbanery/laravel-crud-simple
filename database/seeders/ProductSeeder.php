<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama_produk' => 'Buku',
            'keterangan' => "Buku tulis 5pcs",
            'harga' => 20000,
            'jumlah' => 15,
        ]);

        Product::create([
            'nama_produk' => 'Pencil',
            'keterangan' => null,
            'harga' => 10000,
            'jumlah' => 30,
        ]);
    }
}
