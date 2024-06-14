<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    protected $fillable = ['id', 'title', 'slug', 'short_description', 'content', 'created_at', 'updated_at'];
}
