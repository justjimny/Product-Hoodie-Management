<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Laptop ASUS X441UA',
                'description' => 'Laptop dengan prosesor Intel Core i5 dan RAM 8GB',
                'price' => 7500000,
                'stock' => 15,
                'image' => 'laptop-asus.jpg'
            ],
            [
                'name' => 'Smartphone Samsung Galaxy A52',
                'description' => 'Smartphone dengan kamera 64MP dan baterai 4500mAh',
                'price' => 4999000,
                'stock' => 30,
                'image' => 'samsung-a52.jpg'
            ],
            // Tambahkan lebih banyak produk dummy sesuai kebutuhan
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
