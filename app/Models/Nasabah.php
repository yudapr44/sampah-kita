<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'nasabah';
    protected $guarded = [];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'nasabah_id');
    }
}