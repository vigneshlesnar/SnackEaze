<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('desserts')->insert(
        [
          [
            'name'=>'Wool',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Homemade-Chocolate-Pasta-500x375.png',
          ],
          [
            'name'=>'Jean',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://cdn.hswstatic.com/gif/desserts-update.jpg',
          ],[
            'name'=>'Silk',
            'price'=>'50',
            
            'description'=>'Fine and good',
            'gallery'=>'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/summer-desserts-1584132523.jpg?crop=0.668xw:1.00xh;0.167xw,0&resize=640:*',
          ]
        ]
      );
    }
}
