<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['whatsapp', 'email', 'address', 'instagram', 'tiktok'];
}
