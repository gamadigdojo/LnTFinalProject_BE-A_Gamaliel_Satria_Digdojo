<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'elektronik'
        ]);

        Category::create([
            'name'=>'dapur'
        ]);

        Category::create([
            'name'=>'perkakas'
        ]);

        Category::create([
            'name'=>'snack'
        ]);
    }
}
