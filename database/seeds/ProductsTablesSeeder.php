<?php

use Illuminate\Database\Seeder;
use App\product;

class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'sachioblender',
            'slug' => 'sachio_blender',
            'details' => "original blender",
            'price' => 3400,
            'description' => " sachio blender H43 with double blade. volume 15cl",
             
        ]);
        Product::create([
            'name' => 'tecno camon 11',
            'slug' => 'camon_11',
            'details' => "Android 9.0",
            'price' => 76000,
            'description' => "Dual sim, 4GB, 64Gig , 4200mah battery",
             
        ]);
        Product::create([
            'name' => 'Nokia 1',
            'slug' => 'nokia_1',
            'details' => "Button phone",
            'price' => 76000,
            'description' => "nokia smart phone . made in finland",
             
        ]);
        Product::create([
            'name' => ' huawei prime Y7 prime',
            'slug' => 'huawei_prime',
            'details' => "Android 7.2, huawei Y7 prime ",
            'price' => 69000,
            'description' => "Dual sim, 4GB, 64Gig , 4200mah battery",
             
        ]);
        Product::create([
            'name' => ' polystar 55inchs',
            'slug' => 'polystar_55',
            'details' => "55 inches flat screen TV",
            'price' => 69000,
            'description' => "Dual sim, 4GB, 64Gig , 4200mah battery",
             
        ]);
       
    }
}
