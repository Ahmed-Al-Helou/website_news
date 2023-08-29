<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'date',
        'img',
        'description',
        'category'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'post_category_pivot');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
