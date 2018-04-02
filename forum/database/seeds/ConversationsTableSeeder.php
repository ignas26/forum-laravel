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
        $line1 = 'Codinimo toolsai';
        $line2 = 'BackEnd codinimo toolsai';
        $line3 = 'Flexbox pūliuoja help pls';
        $line4 = 'Restful API + Json encodinimo error';
        $line5 = 'PDO login info';
        
        
        
        $converse1 = [
          'title' => $line1,
            'content' => 'kokios yra geriausios FrontEnd codinimo priemonės, gal kas pasakytų? ar reikės spėlioti? Nes googlinantis matau dauuug variantų ir neaišku, kuris geriausias būtų. Atomas?',
            'channel_id' => 1,
            'user_id' => 2

        ];
        
              $converse2 = [
          'title' => $line2,
            'content' => 'Kaip su BackEnd codinimo priemonėmis? xamppo reikės vėl? kaip ten su serveriais išvis situacija? Ar toolsai tokie patys kaip ir Frontendo atveju ar reikia atsisiųsti naujus kažkokius?',
            'channel_id' => 2,
            'user_id' => 1
   
        ];
        
              $converse3 = [
          'title' => $line3,
            'content' => 'zmones as naujokas codinime tik 2 savaites, ko tai uzlinko flexbox ir iskraipe vaizda visa, visi elementai susoko vienas ant kito, nzn kaip debuginti, vienzo padekit kas galit!!! tik greiciau nes tuoj nd tikrins',
            'channel_id' => 3,
            'user_id' => 1

        ];
        
         $converse4 = [
          'title' => $line4,
            'content' => 'suluzo visas backendas kai paleidau kad encodintu i json formata, nzn ka daryti padekit. Aciu',
            'channel_id' => 4,
            'user_id' => 1
        ];
        
                 $converse5 = [
          'title' => $line5,
            'content' => 'tai pdo info visa is serverio ateina ar kaip cia yra? nesujungia manes ir neatvaizduoja nieko blemba.',
            'channel_id' => 4,
            'user_id' => 1
        ];
        
        
        Conversation::create($converse1);
        Conversation::create($converse2);
        Conversation::create($converse3);
        Conversation::create($converse4);
        Conversation::create($converse5);
        

    }
}
