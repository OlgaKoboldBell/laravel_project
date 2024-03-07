<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Messege;

class MessegeSeeder extends Seeder
{

    public function run(): void
    {
        Messege::create(['user_id'=>1,'text' =>'Відремонтовано']);
        
        Messege::create(['user_id'=>2,'text' =>'ЗатримуюєтьсяРемонт']);
        
    }
}
