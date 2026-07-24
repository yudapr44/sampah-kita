<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'title', 'slug', 'category', 'content', 'status', 'views'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
