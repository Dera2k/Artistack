<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $table = 'artworks';
    
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image_path',
    ];

    /**
     * Get the user that owns this artwork
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}