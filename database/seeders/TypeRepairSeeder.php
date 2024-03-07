<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeRepair;

class TypeRepairSeeder extends Seeder
{

    public function run(): void
    {
        TypeRepair::create(['name'=>'заміна батареї']);
        TypeRepair::create(['name'=>'заміна скла']);
    }
}
