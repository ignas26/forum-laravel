<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\Channel;
use App\Front;
use Illuminate\Support\Facades\Auth;


class FrontsController extends Controller
{
    public function index()
    {   
        $conversations = Conversation::orderBy('created_at', 'desc')->paginate(3);
        return view('front.front', [
            'conversations' => $conversations
        ]);
    }
    
    
    public function show($id)
    {
        $conversations = Conversation::find($id);
        return view('front.show', ['conversations' => $conversations]);
    }
    
    
 public function filter($rowcount)
 {
     $channel = Channel::where('id', $rowcount)->first();
     return view('filter')->with('conversations', $channel->discussions()->paginate(3));
 }
     
 public function __construct()
    {
        $this->middleware('auth');
    }
     
}