<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'greeting',
        'email',
        'password',
        'mobile',
        'logo',
        'img_header',
        'status'
    ];
}
