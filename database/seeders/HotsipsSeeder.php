<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class HotsipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('hotsips')->insert(
        [
          [
            'name'=>'Wool',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://cdn10.bostonmagazine.com/wp-content/uploads/2016/01/warm-latte-mug.jpg',
          ],
          [
            'name'=>'Jean',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://static.dw.com/image/40193776_303.jpg',
          ],[
            'name'=>'Silk',
            'price'=>'50',
            
            'description'=>'Fine and good',
            'gallery'=>'https://www.fodors.com/wp-content/uploads/2019/11/HotHolidayDrinks__HERO_shutterstock_339813557.jpg',
          ]
        ]
      );
    }
}
