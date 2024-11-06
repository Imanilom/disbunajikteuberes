<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'komoditas_id'];

    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class);
    }

    public function varietas()
    {
        return $this->hasMany(Varietas::class);
    }
}
