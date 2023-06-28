<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Ui & UX HomeScreen',
                'description' => 'The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page',
                'image' => 'product-1.png'
             ],
             [
                'name' => 'Ui & UX Authentcation',
                'description' => 'The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page',
                'image' => 'product-2.png'
             ],
             [
                'name' => 'Ui & UX Categories',
                'description' => 'The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page',
                'image' => 'product-3.png'
             ],
            ];

        foreach ($products as $product) {

            Product::create($product);

        }//end of for each
       
    }
}
