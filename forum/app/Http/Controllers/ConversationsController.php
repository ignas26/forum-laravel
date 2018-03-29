<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class ConversationsController extends Controller
{
    
    public function create()
    {
        
        return view('converse');
    }
    
    
    
     public function store(Request $request)
    {

         
         $this->validate($request, [
        
         'title' => 'required',
         'channel_id' => 'required',
         'content' => 'required'
        
         
         ]);

    $conversation = new Conversation;
    $conversation->title = $request->input('title');
    $conversation->content = $request->input('content');
    $conversation->channel_id = $request->input('channel_id');
    $conversation->user_id = Auth::id();
    $conversation->save();
          
    $request->session()->flash('message', 'Klausimas nusiųstas');    
    return redirect(route('home'));
     }
    

    public function answer(Request $request, $id)
    {
        $conv = Conversation::find($id);
        $answ = new Answer;
        $answ->user_id = Auth::id();
        $answ->conversation_id = $id;
        $answ->content = $request->input('answer');
        $answ->save();

    $request->session()->flash('message', 'atsakymas pateiktas');
    return redirect()->back();
    }
    
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}
