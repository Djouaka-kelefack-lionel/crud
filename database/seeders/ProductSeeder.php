<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Ordinateur Portable',
            'description' => 'Ordinateur portable haute performance avec 16GB RAM et SSD 512GB',
            'price' => 999.99,
            'stock' => 10
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Smartphone dernière génération avec appareil photo 48MP',
            'price' => 699.99,
            'stock' => 15
        ]);

        Product::create([
            'name' => 'Casque Bluetooth',
            'description' => 'Casque sans fil avec réduction de bruit active',
            'price' => 199.99,
            'stock' => 20
        ]);

        Product::create([
            'name' => 'Tablette',
            'description' => 'Tablette 10 pouces avec stylet inclus',
            'price' => 449.99,
            'stock' => 8
        ]);

        Product::create([
            'name' => 'Montre Connectée',
            'description' => 'Montre intelligente avec suivi fitness et notifications',
            'price' => 299.99,
            'stock' => 12
        ]);
    }
} 