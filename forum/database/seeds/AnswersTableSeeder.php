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
            'content' => 'ko tu dabar nori atsakymo kai čia subjektyviai kiekvienam. Žėk pagal galimybes, kaip compas išveža. Brackets "lengviausia" kas liečia našumą, VisualStudio jau daugiau galios reikalauja, o phpstorm išvis mišios jeigu compas senolis',
            'conversation_id' => 1,
            'user_id' => 1

        ];
        
              $answer2 = [
            'content' => 'tai tiesiog xamppas pagrinde, cmd terminalas dar ir smegenine gera ;)',
            'conversation_id' => 2,
            'user_id' => 1
   
        ];
        
              $answer3 = [
            'content' => 'šitą iššigooglink jau gal pats kaipnors, rankos nenukris',
            'conversation_id' => 3,
            'user_id' => 2

        ];
        
        $answer4 = [
            'content' => 'Hardcore. Čia jau profų reik klaust. Kur forumo protai? Nes man irgi tas json tikras peilis...',
            'conversation_id' => 4,
            'user_id' => 4

        ];
        
        $answer5 = [
            'content' => 'yzi gi. Brackets isirasyk ir viskas. Xamppa dar gali, nes veliau tikrai reikes. Bet pirmai pradziai brackets. Uz savaites gal isvis jau mesi ta codinima, tai kam cia prisirasyt softo kai dar neaisku nieko.',
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
