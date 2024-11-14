<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','thread_id','reply_id','comment'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
