<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // public static function boot(){
    //     parent::boot();

    //     self::creating(function($question){
    //         $question->slug = Str::slug($question->title, '-');
    //     });
    // }

    public function getSinceAttribute(){
        return $this->created_at->diffInDays(now());
    }

   

    public function author(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
