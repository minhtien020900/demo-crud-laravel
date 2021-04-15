<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('products')->insert([
                'name' => 'Product '.$i,
                'category_name'=>'Category name '.$i,
                'desc'=>'Description '.$i,
                'price'=>10000,
                'image'=>'image-name '.$i,
            ]);
        }
    }
}
