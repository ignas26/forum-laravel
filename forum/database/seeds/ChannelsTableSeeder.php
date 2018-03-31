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
        
        $channel1 = ['title' => 'FrontEnd', 'rowcount' => str_slug('FrontEnd')];
        $channel2 = ['title' => 'BackEnd', 'rowcount' => str_slug('BackEnd')];
        $channel3 = ['title' => 'HTML', 'rowcount' => str_slug('HTML')];
        $channel4 = ['title' => 'CSS', 'rowcount' => str_slug('CSS')];
        $channel5 = ['title' => 'Javascript', 'rowcount' => str_slug('JavaScript')];
        $channel6 = ['title' => 'JS Frameworks', 'rowcount' => str_slug('JS Frameworks')];
        $channel7 = ['title' => 'PHP', 'rowcount' => str_slug('PHP')];
        $channel8 = ['title' => 'Python', 'rowcount' => str_slug('Python')];
        $channel9 = ['title' => 'PHP frameworks', 'rowcount' => str_slug('PHP frameworks')];
        
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
