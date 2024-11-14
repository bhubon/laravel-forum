<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thread extends Model {
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'status'];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class,'thread_id');
    }
}
