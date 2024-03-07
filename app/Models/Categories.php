<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'title'
    ];

    public $timestamps=false;
    public function meme()
    {
        return $this->hasMany(Memes::class);
    }
}
