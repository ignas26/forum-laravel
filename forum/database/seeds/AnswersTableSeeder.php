<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        
        $answer1 = [
            'content' => 'this not easy',
            'conversation_id' => 1,
            'user_id' => 1

        ];
        
              $answer2 = [
            'content' => 'this hard',
            'conversation_id' => 2,
            'user_id' => 1
   
        ];
        
              $answer3 = [
            'content' => 'this medium',
            'conversation_id' => 3,
            'user_id' => 2

        ];
        
        $answer4 = [
            'content' => 'this easy',
            'conversation_id' => 4,
            'user_id' => 4

        ];
        
        $answer5 = [
            'content' => 'this very easy',
            'conversation_id' => 1,
            'user_id' => 3

        ];
        
        
        
        Answer::create($answer1);
        Answer::create($answer2);
        Answer::create($answer3);
        Answer::create($answer4);
        Answer::create($answer5);
    }
}
