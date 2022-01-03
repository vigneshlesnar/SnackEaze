<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JuiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('juices')->insert(
        [
          [
            'name'=>'Water Melon Juice',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://www.veggieinspired.com/wp-content/uploads/2018/07/watermelon-juice-5-500x500.jpg',
          ],
          [
            'name'=>'Orange Juice',
            'price'=>'250',
           
            'description'=>'Fine and good',
            'gallery'=>'https://www.alphafoodie.com/wp-content/uploads/2020/11/Orange-Ginger-Juice-1-of-1.jpeg',
          ],
          [
            'name'=>'Pomegranate Juice',
            'price'=>'150',
            
            'description'=>'Fine and good',
            'gallery'=>'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/pomegranate-juice-recipe-500x500.jpg',
          ],
          [
            'name'=>'Kiwi Juice',
            'price'=>'150',
            
            'description'=>'Fine and good',
            'gallery'=>'https://www.pepperbowl.com/wp-content/uploads/2013/03/Kiwi-Juice-720x720.jpg',
          ],
        ]
      );
    }
}
