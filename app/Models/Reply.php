<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'thread_id', 'reply_id', 'comment'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
    }

    public function children()
    {
        return $this->hasMany(Reply::class, 'reply_id')->with('children'); // Load children recursively
    }


}
