<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductRepair;

class ProductRepairSeeder extends Seeder
{

    public function run(): void
    {
        ProductRepair::create(['name'=>'монітори']);
        ProductRepair::create(['name'=>'планшети']);
        ProductRepair::create(['name'=>'телефони']);
        ProductRepair::create(['name'=>'ноутбуки']);
    }
}
