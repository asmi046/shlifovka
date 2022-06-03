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

        DB::table("works")->insert(["wokr_class"=> "Ремонт постели распредвала", "wokr"=> "ГАЗ 53, ЗИЛ, трактора", "price"=> 5500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт постели распредвала", "wokr"=> "КАМАЗ, ЯМЗ 236, 238", "price"=> 5500]);

        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "ГБЦ Москвич, ВАЗ, ГАЗ, ЗИЛ", "price"=> 450]);
        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "Блок ВАЗ, ГБЦ иномарка", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "Бок ГАЗ 53, Блок иномарка", "price"=> 700]);
        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "Блок ГАЗ 402, 406, ГБЦ МТЗ, ЯМЗ", "price"=> 550]);
        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "Комплект ВАЗ", "price"=> 1500]);
        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "Комплект ГАЗ 402, 406, иномарка", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Мойка", "wokr"=> "Комплект ГАЗ 53, Форд", "price"=> 2500]);

        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Расточка и платохонингование блока", "price"=> 2200]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Расточка и платохонингование блока под 79-82", "price"=> 2500]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Колен. вал", "price"=> 1800]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Чистка колен. вала", "price"=> 350]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Гильзовка и платохонингование блока", "price"=> 3600]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Замена вклад. пром. вала", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Перепрессовка поршней ВАЗ", "price"=> 1200]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Частичная сборка двигателя ВАЗ", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Ремонт ГБЦ без замены направляющих 01", "price"=> 2500]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Ремонт ГБЦ с регулировкой клапанов с заменой направляющих 08", "price"=> 3000]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Опрессовка ГБЦ", "price"=> 1500]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Опрессовка блока", "price"=> 1500]);
        DB::table("works")->insert(["wokr_class"=> "ВАЗ", "wokr"=> "Замена седла клапана", "price"=> 300]);

        DB::table("works")->insert(["wokr_class"=> "Москвич", "wokr"=> "Шлифовка колен. вала", "price"=> 1800]);
        DB::table("works")->insert(["wokr_class"=> "Москвич", "wokr"=> "Шлифовка распред. вала", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "Москвич", "wokr"=> "Втулки распред. вала", "price"=> 750]);

        DB::table("works")->insert(["wokr_class"=> "ОКА", "wokr"=> "Расточка и платохонингование блока", "price"=> 1200]);
        DB::table("works")->insert(["wokr_class"=> "ОКА", "wokr"=> "Колен. вал", "price"=> 1200]);
        DB::table("works")->insert(["wokr_class"=> "ОКА", "wokr"=> "Ремонт ГБЦ с заменой направляющих", "price"=> 1800]);

        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Колен. вал. ГАЗ 402, 406", "price"=> 3500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Чистка колен. вала", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Гильзовка ГАЗ — 406", "price"=> 5500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Расточка и платохонингование блока ГАЗ 406, УАЗ", "price"=> 3500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Ремонт постели распред. вала ГАЗ 402, УАЗ", "price"=> 4500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Замена втулок распред. вала ГАЗ 402, УАЗ", "price"=> 3750]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Шлифовка распред. вала", "price"=> 1500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Ремонт ГБЦ без замены направляющих ГАЗ 402", "price"=> 3500]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Ремонт ГБЦ без замены направляющих ГАЗ 406", "price"=> 4400]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Опрессовка ГБЦ", "price"=> 1700]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Опрессовка блока УАЗ 100 л.с.", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Замена седла клапана ГАЗ 402 — 400, ГАЗ 406", "price"=> 300]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Замена вклад. пром. вала ГАЗ 406", "price"=> 1000]);
        DB::table("works")->insert(["wokr_class"=> "Волга", "wokr"=> "Частичная сборка моторов ГАЗ 402,406", "price"=> 3000]);

        DB::table("works")->insert(["wokr_class"=> "Токарные работы", "wokr"=> "Восстановление маслосгонной резьбы колен. вала", "price"=> 350]);
        DB::table("works")->insert(["wokr_class"=> "Токарные работы", "wokr"=> "Установка ввертыша свечи", "price"=> 350]);
        DB::table("works")->insert(["wokr_class"=> "Токарные работы", "wokr"=> "МОТО 1 цилиндр", "price"=> 1000]);

        
        //ГАЗ 52, ЗИЛ, ГАЗ 53

        DB::table("works")->insert(["wokr_class"=> "ГАЗ 52, ЗИЛ, ГАЗ 53", "wokr"=> "Колен. вал", "price"=> 4500]);
        DB::table("works")->insert(["wokr_class"=> "ГАЗ 52, ЗИЛ, ГАЗ 53", "wokr"=> "Чистка колен. вала", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "ГАЗ 52, ЗИЛ, ГАЗ 53", "wokr"=> "Ремонт ГБЦ без замены направляющих", "price"=> 3650]);
        DB::table("works")->insert(["wokr_class"=> "ГАЗ 52, ЗИЛ, ГАЗ 53", "wokr"=> "Замена седла клапана", "price"=> 400]);
        DB::table("works")->insert(["wokr_class"=> "ГАЗ 52, ЗИЛ, ГАЗ 53", "wokr"=> "Шлифовка распред. вала", "price"=> 1500]);
        DB::table("works")->insert(["wokr_class"=> "ГАЗ 52, ЗИЛ, ГАЗ 53", "wokr"=> "Опресовка ГБЦ ГАЗ 53, ЗИЛ", "price"=> 1700]);

        //Легковые иномарки

        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Колен. вал. 4 цилиндра", "price"=> 4000]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Колен. вал. 5-8 цилиндров", "price"=> 5000]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Расточка и платохонингование блока 1 цилиндр", "price"=> 1200]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Гильзовка и платохонингование блока 1 цилиндр", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "V — образный расточка и платохонингование блока 1 цилиндр", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Ремонт ГБЦ иномарка 1 клапана", "price"=> 650]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Регулировка клапанов 8клап.", "price"=> 2500]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Замена седла", "price"=> 1000]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Опрессовка ГБЦ", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Легковые иномарки", "wokr"=> "Опрессовка блока", "price"=> 2500]);


        //Высота блока более 180 мм

        DB::table("works")->insert(["wokr_class"=> "Высота блока более 180 мм", "wokr"=> "Расточка и платохонингование блока 1 цилиндр", "price"=> 2000]);
        DB::table("works")->insert(["wokr_class"=> "Высота блока более 180 мм", "wokr"=> "Гильзовка и платохонингование блока 1 цилиндр", "price"=> 3000]);

        //Коленчатые валы


        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "А41, Д 3900, СМД, ЮМЗ", "price"=> 5500]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "МТЗ—4ц, Т40", "price"=> 4500]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "Д25", "price"=> 3500]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "МТЗ—4ц, Т40/ Д25 - чистка", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "СМД31", "price"=> 8000]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "ЯМЗ 238, КАМАЗ, МТЗ, — 6ц", "price"=> 7000]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "ЯМЗ 236", "price"=> 6000]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "Иномарки 4 цилиндра", "price"=> 8000]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "Иномарки 6 цилиндров", "price"=> 12000]);
        DB::table("works")->insert(["wokr_class"=> "Коленчатые валы", "wokr"=> "Иномарки 8 цилиндров", "price"=> 15000]);

        //Ремонт ГБЦ грузовые

        DB::table("works")->insert(["wokr_class"=> "Ремонт ГБЦ грузовые", "wokr"=> "Ремонт ГБЦ МТЗ", "price"=> 3980]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт ГБЦ грузовые", "wokr"=> "Ремонт ГБЦ КАМАЗ без замены направляющих", "price"=> 1300]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт ГБЦ грузовые", "wokr"=> "Опрессовка ГБЦ КАМАЗ", "price"=> 500]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт ГБЦ грузовые", "wokr"=> "Ремонт ЯМЗ без замены направляющих", "price"=> 4580]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт ГБЦ грузовые", "wokr"=> "Ремонт ГБЦ иномарка 1 -го клапана", "price"=> 900]);
        DB::table("works")->insert(["wokr_class"=> "Ремонт ГБЦ грузовые", "wokr"=> "Замена седла клапана ЯМЗ/КАМАЗ", "price"=> 500]);

        //Фрезеровка блоков и ГБЦ на станке "COMEC" Италия

        DB::table("works")->insert(["wokr_class"=> "Фрезеровка блоков и ГБЦ на станке 'COMEC' Италия", "wokr"=> "Фрезеровка плоскости Б/Ц грузовая иномарка", "price"=> 5000]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка блоков и ГБЦ на станке 'COMEC' Италия", "wokr"=> "Фрезеровка плоскости Б/Ц грузовая иномарка крупногабарит", "price"=> 10000]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка блоков и ГБЦ на станке 'COMEC' Италия", "wokr"=> "Фрезеровка плоскости Б/Ц грузовая иномарка (1 цил.)", "price"=> 800]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка блоков и ГБЦ на станке 'COMEC' Италия", "wokr"=> "Фрезеровка плоскости Б/Ц МТЗ", "price"=> 3000]);
        DB::table("works")->insert(["wokr_class"=> "Фрезеровка блоков и ГБЦ на станке 'COMEC' Италия", "wokr"=> "Фрезеровка плоскости ГБЦ ЯМЗ-238", "price"=> 3000]);
    }
}
