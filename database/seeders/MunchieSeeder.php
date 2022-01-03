<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunchieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('munchies')->insert(
        [
          [
            'name'=>'Wool',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://images.media-allrecipes.com/userphotos/571588.jpg',
          ],
          [
            'name'=>'Jean',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://cdn-prod.medicalnewstoday.com/content/images/articles/324/324597/cannabis-cookies-munchies.jpg',
          ],[
            'name'=>'Silk',
            'price'=>'50',
            
            'description'=>'Fine and good',
            'gallery'=>'https://www.candyindustry.com/ext/resources/Everyday/2020/Edibles-cookies-stock.jpg?1580321719',
          ]
        ]
      );
    }
}
