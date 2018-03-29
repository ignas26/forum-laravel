<?php

use Illuminate\Database\Seeder;
use App\Conversation;

class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $line1 = 'Why is this not working???';
        $line2 = 'Pls help???';
        $line3 = 'Finally solved it';
        $line4 = 'Done';
        $line5 = 'Well done';
        
        
        
        $converse1 = [
          'title' => $line1,
            'content' => 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah',
            'channel_id' => 1,
            'user_id' => 2

        ];
        
              $converse2 = [
          'title' => $line2,
            'content' => 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah',
            'channel_id' => 2,
            'user_id' => 1
   
        ];
        
              $converse3 = [
          'title' => $line3,
            'content' => 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah',
            'channel_id' => 2,
            'user_id' => 1

        ];
        
         $converse4 = [
          'title' => $line4,
            'content' => 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah',
            'channel_id' => 2,
            'user_id' => 1
        ];
        
                 $converse5 = [
          'title' => $line5,
            'content' => 'nobody said this was going to be easy and blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah',
            'channel_id' => 2,
            'user_id' => 1
        ];
        
        
        Conversation::create($converse1);
        Conversation::create($converse2);
        Conversation::create($converse3);
        Conversation::create($converse4);
        Conversation::create($converse5);
        

    }
}
