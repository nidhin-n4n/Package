<?php

use Illuminate\Database\Seeder;
use MyVendor\ProductList\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = new DateTime();

        Product::create([
            'id' => 1,
            'name' => 'Dell Mouse',
            'price' => 200,
            'color' => 'Black',
            'speed' => 1,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);

        Product::create([
            'id' => 2,
            'name' => 'Lyf Water',
            'price' => 6000,
            'color' => 'White',
            'speed' => 15,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        Product::create([
            'id' => 3,
            'name' => 'Hp Keyboard 210',
            'price' => 150,
            'color' => 'Black',
            'speed' => 10,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        Product::create([
            'id' => 4,
            'name' => 'i20',
            'price' => 1500,
            'color' => 'Red',
            'speed' => 200,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);

        Product::create([
            'id' => 5,
            'name' => 'Honda Act',
            'price' => 500,
            'color' => 'Blue',
            'speed' => 150,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
        
        Product::create([
            'id' => 6,
            'name' => 'Nano Z',
            'price' => 400,
            'color' => 'Yellow',
            'speed' => 100,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ]);
    }
}
