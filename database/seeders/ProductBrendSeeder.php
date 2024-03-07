<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductBrend;

class ProductBrendSeeder extends Seeder
{
    public function run(): void
    {
        ProductBrend::create(['name'=>'Samsung']);
        ProductBrend::create(['name'=>'Lenovo']);
        ProductBrend::create(['name'=>'Apple']);
    }
}
