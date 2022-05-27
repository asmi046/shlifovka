<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CreateWorkData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка головки блока цилиндров", "wokr"=> "ВАЗ, Москвич", "price"=> 1500]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка головки блока цилиндров", "wokr"=> "ЗИЛ, ГАЗ 406, 402, 53", "price"=> 1600]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка головки блока цилиндров", "wokr"=> "Трактора, ЯМЗ 236", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка головки блока цилиндров", "wokr"=> "Иномарки (за цилиндр)", "price"=> 600]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка головки блока цилиндров", "wokr"=> "Иномарки чугун (за цилиндр)", "price"=> 700]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка головки блока цилиндров", "wokr"=> "Иномарки с форкамерами (за цилиндр)", "price"=> 900]);

        DB::table("works")->insert(["wokr_class"=> "Ремонт верхней части шатуна", "wokr"=> "ВАЗ, ГАЗ, Москвич", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт верхней части шатуна", "wokr"=> "Трактора, ЯМЗ, КАМАЗ, ЗИЛ", "price"=> 1000]);

        DB::table("works")->insert(["wokr_class"=> "Ремонт нижней части шатуна", "wokr"=> "КАМАЗ", "price"=> 1500]);

        DB::table("works")->insert(["wokr_class"=> "Ремонт постели коленвала", "wokr"=> "ВАЗ, Москвич", "price"=> 4500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт постели коленвала", "wokr"=> "ЗИЛ, ГАЗ", "price"=> 6500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт постели коленвала", "wokr"=> "ЯМЗ 238, КАМАЗ, А41", "price"=> 15500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт постели коленвала", "wokr"=> "ЯМЗ 236, трактора", "price"=> 13500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт постели коленвала", "wokr"=> "МТЗ", "price"=> 7500]);
    }
}
