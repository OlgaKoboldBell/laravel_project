<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PriceDetail;

class PriceDetailSeeder extends Seeder
{

    public function run(): void
    {
        PriceDetail::create(['name'=>'заміна скла', 'price'=> 700]);
        PriceDetail::create(['name'=>'установка Віндоуз', 'price'=> 1000]);
    }
}
