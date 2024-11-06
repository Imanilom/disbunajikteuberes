<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varietas extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'item_id'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
