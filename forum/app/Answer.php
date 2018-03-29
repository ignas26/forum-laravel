<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Conversation;
use Illuminate\Support\Facades\Auth;


class Answer extends Model
{
    protected $fillable = ['content', 'user_id', 'conversation_id'];
    
    public function conversation()
    {
        return $this->belongsTo('App\Conversation');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function likes()
    {
    
        return $this->hasMany('App\Like');
    }
    
    public function gained_a_like()
    {
        $id = Auth::id();
        $likedBy = [];
        
      
        foreach($this->likes as $like):
        array_push($likedBy, $like->user_id);
            
        endforeach;
        
        
        if(in_array($id, $likedBy))
        {
            return true;
        }
        else {
            return false;
        }
    }
        
}
