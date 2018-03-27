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
            'conversation_id' => 2,
            'user_id' => 1

        ];
        
        Answer::create($answer1);
        Answer::create($answer2);
        Answer::create($answer3);
    }
}
