<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function articles() {
	return $this->hasMany(Article::class);
    }

    public function image() {
        return $this->belongsTo(Image::class);
    }
}
