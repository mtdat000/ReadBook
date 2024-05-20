<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'year_published',
        'synopsis',
        'cover'
    ];

    //Relationship with review 
    public function reviews() {
        return $this->hasMany(Review::class, 'book_id');
    }
}
