<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cateogory;
use App\Models\Comment;
use App\Models\Tag;

class Article extends Model
{
    use HasFactory;

/*  
public function user() {
        return $this->belongsTo(User::class);
    }
  
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function tag() {
        return $this->hasMany(Tag::class);
    } */
}
