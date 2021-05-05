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
                'product_name' => 'Product '.$i,
                'category_id'=>1,
                'product_desc'=>'Description '.$i,
                'product_price'=>10000,
                'product_image'=>'image-name '.$i,
            ]);
        }
    }
}
