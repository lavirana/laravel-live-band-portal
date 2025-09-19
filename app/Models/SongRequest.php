<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongRequest extends Model
{
    use HasFactory;

    // Only allow these fields to be mass assigned
    protected $fillable = [
        'name',
        'email',
        'song_title',
        'message',
    ];

      // One song request has many feedbacks
      public function feedbacks() {
        return $this->hasMany(Feedback::class);
    }
}
