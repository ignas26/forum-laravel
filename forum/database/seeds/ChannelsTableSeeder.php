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
        
        $channel1 = ['title' => 'FrontEnd bendras įvadas', 'rowcount' => str_slug('FrontEnd bendras įvadas')];
        $channel2 = ['title' => 'BackEnd bendras įvadas', 'rowcount' => str_slug('BackEnd bendras įvadas')];
        $channel3 = ['title' => 'HTML/CSS', 'rowcount' => str_slug('HTML/CSS')];
        $channel4 = ['title' => 'PHP', 'rowcount' => str_slug('PHP')];
        $channel5 = ['title' => 'PHP frameworks', 'rowcount' => str_slug('PHP frameworks')];
        $channel6 = ['title' => 'Javascript', 'rowcount' => str_slug('Javascript')];
        $channel7 = ['title' => 'JS Frameworks', 'rowcount' => str_slug('JS frameworks')];
        $channel8 = ['title' => 'Python', 'rowcount' => str_slug('Python')];
        $channel9 = ['title' => 'Kitos kalbos', 'rowcount' => str_slug('Kitos kalbos')];
        
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
