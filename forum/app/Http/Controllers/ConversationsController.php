<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\Answer;
use App\Attachment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\User;

class ConversationsController extends Controller
{
    

    public function create()
    {
        
 
        return view('converse');
    }
    
    
    
     public function store(Request $request)
    {

        $messages = [
          'title.required' => 'Formą prašome užpildyti iki galo. Nurodykite temą.',
          'content.required' => 'Formą prašome užpildyti iki galo. Apibrėžkite problemą.'
            
      ];
      $validator = Validator::make($request->all(), [
          'title' => 'required|unique:conversations|max:255',
          'channel_id' => 'required',
          'content' => 'required'
      ], $messages);
      if ($validator->fails()) {
          return redirect(route('convcreate'))
                      ->withErrors($validator)
                      ->withInput();
      }
         
         
         
    $conversation = new Conversation;
    $conversation->title = $request->input('title');
    $conversation->content = $request->input('content');
    $conversation->channel_id = $request->input('channel_id');
    $conversation->user_id = Auth::id();
    $conversation->save();
    
    $conversation->user->karma +=10;
    $conversation->user->save();
    
        if ($request->hasFile('attachments')) {
            foreach($request->attachments as $attachment)
            {
               $original_name = $attachment->getClientOriginalName();
               $path = Storage::putFile('public', $attachment);
               
               $conversation_att = new Attachment();
               $conversation_att->conversation_id = $conversation->channel_id;
               $conversation_att->path = $path;
               $conversation_att->original_name = $original_name;
               $conversation_att->save();
            }
        }

         
          
    $request->session()->flash('message', 'Klausimas nusiųstas');    
    return redirect(route('front'));
     }
    

    public function answer(Request $request, $id)
    {
        $conv = Conversation::find($id);
        $answ = new Answer;
        $answ->user_id = Auth::id();
        $answ->conversation_id = $id;
        $answ->content = $request->input('answer');
        $answ->save();
        
    $answ->user->karma +=15;
    $answ->user->save();

    $request->session()->flash('message', 'atsakymas pateiktas');
    return redirect()->back();
    }
    
    
    
        public function downloadAttachment($nr){
         $file = Attachment::find($nr);
         return Storage::download($file->path, $file->original_name);
     }
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}
