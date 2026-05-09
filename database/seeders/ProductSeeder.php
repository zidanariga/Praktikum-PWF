<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari atau buat user zidan
        $user = User::firstOrCreate(
            ['email' => 'zidan@example.com'],
            [
                'name' => 'zidan',
                'password' => bcrypt('password'),
            ]
        );

        $products = [
            ['name' => 'Mechanical Gaming Keyboard', 'qty' => 15, 'price' => 850000],
            ['name' => 'Gaming Mouse RGB', 'qty' => 20, 'price' => 450000],
            ['name' => 'Gaming Headset HyperSound', 'qty' => 10, 'price' => 1200000],
            ['name' => 'Gaming Monitor 144Hz', 'qty' => 8, 'price' => 3200000],
            ['name' => 'Gaming Chair Pro', 'qty' => 5, 'price' => 2800000],
            ['name' => 'Mouse Pad XL RGB', 'qty' => 25, 'price' => 250000],
            ['name' => 'Gaming Webcam HD', 'qty' => 12, 'price' => 650000],
            ['name' => 'Gaming Microphone USB', 'qty' => 9, 'price' => 900000],
            ['name' => 'Gaming Controller Wireless', 'qty' => 14, 'price' => 700000],
            ['name' => 'Gaming Laptop RTX', 'qty' => 4, 'price' => 18500000],
            ['name' => 'Gaming PC Fullset', 'qty' => 3, 'price' => 25000000],
            ['name' => 'Gaming Desk Carbon', 'qty' => 6, 'price' => 2100000],
            ['name' => 'Gaming Speaker Stereo', 'qty' => 11, 'price' => 780000],
            ['name' => 'Gaming Router WiFi 6', 'qty' => 7, 'price' => 1350000],
            ['name' => 'Gaming Capture Card', 'qty' => 5, 'price' => 1600000],
            ['name' => 'Gaming SSD 1TB', 'qty' => 18, 'price' => 1450000],
            ['name' => 'Gaming RAM RGB 16GB', 'qty' => 13, 'price' => 980000],
            ['name' => 'Gaming Power Supply 750W', 'qty' => 10, 'price' => 1250000],
            ['name' => 'Gaming VGA RTX 4070', 'qty' => 2, 'price' => 12000000],
            ['name' => 'Gaming Cooling Fan RGB', 'qty' => 30, 'price' => 175000],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'qty' => $product['qty'],
                'price' => $product['price'],
                'user_id' => $user->id,
            ]);
        }
    }
}