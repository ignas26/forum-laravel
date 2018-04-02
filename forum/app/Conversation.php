<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'channel_id'];
    
     public function channel()
    {
        
    return $this->belongsTo('App\Channel');    
    }
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    
        public function attachments(){
         return $this->hasMany('App\Attachment');
     }
    
}