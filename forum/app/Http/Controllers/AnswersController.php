<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Answer;
use App\Like;

class AnswersController extends Controller
{
public function like(Request $request, $id)
{
    //$answer = Answer::find($id);
    $like = new Like;
    $like->answer_id = $id;
    $like->user_id = Auth::id();
    $like->save();
    
     $request->session()->flash('message', 'Sakote, kad patinka');
       return redirect()->back();

}
    

public function unlike(Request $request, $id)
{


    $like = Like::where('answer_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();
    $request->session()->flash('message', 'Nuemėte laiką');
    return redirect()->back();
}
  
    

 public function __construct()
    {
        $this->middleware('auth');
    }

    
}






        
