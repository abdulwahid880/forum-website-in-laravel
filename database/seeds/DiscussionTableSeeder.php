<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'implementing outh 2 in laravel';
        $t2 = 'vuejs using laravel';
        $t3 = 'make a simple crud in laravel';
        $t4 = 'this is forum build in laravel';

        $d1 = [
           
               'title'=> $t1,
              'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum feugiat odio, semper dapibus quam aliquam vitae. Vivamus maximus, elit quis aliquet sollicitudin, magna mauris dictum sem, vitae condimentum sapien dolor et leo. Nam vitae leo ac nisi consequat tempus. Aliquam et justo ut urna rhoncus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus et felis sed tellus luctus tempor at eget torto',  
               'channel_id'=>1,
               'user_id'=> 2,
               'slug'=>str_slug($t1)
        ];

        $d2 = [
           
               'title'=> $t2,
              'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum feugiat odio, semper dapibus quam aliquam vitae. Vivamus maximus, elit quis aliquet sollicitudin, magna mauris dictum sem, vitae condimentum sapien dolor et leo. Nam vitae leo ac nisi consequat tempus. Aliquam et justo ut urna rhoncus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus et felis sed tellus luctus tempor at eget torto',  
               'channel_id'=>2,
               'user_id'=> 2,
               'slug'=>str_slug($t2)
        ];
       
       $d3 = [
           
               'title'=> $t3,
              'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum feugiat odio, semper dapibus quam aliquam vitae. Vivamus maximus, elit quis aliquet sollicitudin, magna mauris dictum sem, vitae condimentum sapien dolor et leo. Nam vitae leo ac nisi consequat tempus. Aliquam et justo ut urna rhoncus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus et felis sed tellus luctus tempor at eget torto',  
               'channel_id'=>3,
               'user_id'=> 1,
               'slug'=>str_slug($t3)
        ];
       
       $d4 = [
           
               'title'=> $t4,
              'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum feugiat odio, semper dapibus quam aliquam vitae. Vivamus maximus, elit quis aliquet sollicitudin, magna mauris dictum sem, vitae condimentum sapien dolor et leo. Nam vitae leo ac nisi consequat tempus. Aliquam et justo ut urna rhoncus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus et felis sed tellus luctus tempor at eget torto',  
               'channel_id'=>4,
               'user_id'=> 2,
               'slug'=>str_slug($t4)
        ];
       
       
      Discussion::create($d1);
      Discussion::create($d2);
      Discussion::create($d3);
      Discussion::create($d4);
    }
}
