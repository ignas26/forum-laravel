<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['content', 'user_id', 'conversation_id'];
    
    public function conversation()
    {
        return $this->belongsTo('App/Conversation');
    }
}
