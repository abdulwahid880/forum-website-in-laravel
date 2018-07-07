<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $channel1 = ['title'=>'laravel','slug'=>str_slug('laravel')];
     $channel2 = ['title'=>'Bootstrap','slug'=>str_slug('Bootstrap')];   
     $channel3 = ['title'=>'Spark','slug'=>str_slug('Spark')];
     $channel4 = ['title'=>'lueman','slug'=>str_slug('Lueman')];
     $channel5 = ['title'=>'HTML','slug'=>str_slug('HTML')];
     $channel6 = ['title'=>'PHP','slug'=>str_slug('PHP')];
     $channel7 = ['title'=>'CSS3','slug'=>str_slug('CSS3')];
     $channel8 = ['title'=>'Forge','slug'=>str_slug('Forge')];
    
    Channel::create($channel1);
    Channel::create($channel2);
    Channel::create($channel3);
    Channel::create($channel4);
    Channel::create($channel5);
    Channel::create($channel6);
    Channel::create($channel7);
    Channel::create($channel8);
    
    }
}
