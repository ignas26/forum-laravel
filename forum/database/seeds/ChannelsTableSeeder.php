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
        
        $channel1 = ['title' => 'FrontEnd'];
        $channel2 = ['title' => 'BackEnd'];
        $channel3 = ['title' => 'HTML'];
        $channel4 = ['title' => 'CSS'];
        $channel5 = ['title' => 'JavaScript'];
        $channel6 = ['title' => 'JS Frameworks'];
        $channel7 = ['title' => 'PHP'];
        $channel8 = ['title' => 'Python'];
        $channel9 = ['title' => 'PHP frameworks'];
        
        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        Channel::create($channel7);
        Channel::create($channel8);
        Channel::create($channel9);

        
    }
}
