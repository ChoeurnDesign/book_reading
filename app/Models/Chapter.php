<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book; // Import Book model

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id', 'title', 'content', 'order'
    ];

    // One Chapter belongs to One Book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
