<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use Illuminate\Support\Facades\Auth;

class ConversationsController extends Controller
{
    
    public function create()
    {
        
        return view('converse');
    }
    
    
    
     public function store()
    {
//
    }
    
    
    
    
    
    
    
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}
