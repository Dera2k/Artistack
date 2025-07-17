<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    // TO look in the right table
    protected $table = 'artworks';
    protected $fillable = ['title','description','image_path'];
}
