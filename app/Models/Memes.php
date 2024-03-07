<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memes extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'title',
        'categories_id',
        'user_id'
    ];

    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->morphMany(Likes::class, 'likeable_id');
    }
}
