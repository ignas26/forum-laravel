<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;



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

}