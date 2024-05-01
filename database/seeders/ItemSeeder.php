<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'category_id'=>'1',
            'nama'=>'laptop',
            'harga'=>1000000,
            'jumlah'=>35,
            'url_cover_buku'=>'\storage\public\download\Sknaq3CrEpq4fCYWAZMwKhTUR1KNudzFjutmMyeV.png'
        ]);
    }
}
