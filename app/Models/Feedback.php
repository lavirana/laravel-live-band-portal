<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'feedback',
    ];

    public function songRequest() {
        return $this->belongsTo(SongRequest::class);
    }
}
