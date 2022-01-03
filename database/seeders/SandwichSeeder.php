<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class SandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sandwiches')->insert(
        [
          [
            'name'=>'Wool',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://www.indianhealthyrecipes.com/wp-content/uploads/2019/05/club-sandwich-recipe.jpg',
          ],
          [
            'name'=>'Jean',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://www.indianhealthyrecipes.com/wp-content/uploads/2019/05/club-sandwich-recipe.jpg',
          ],[
            'name'=>'Silk',
            'price'=>'50',
            
            'description'=>'Fine and good',
            'gallery'=>'https://punampaul.com/wp-content/uploads/2020/03/Veg-Toast-Sandwich.jpg',
          ]
        ]
      );
    }
}
