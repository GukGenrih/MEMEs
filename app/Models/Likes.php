<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'likeable_type',
        'likable_id',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }


    public function likeable()
    {
        return $this->morphTo();
    }


//    public function meme()
//    {
//        return $this->morphTo(memes::class);
//    }
}
