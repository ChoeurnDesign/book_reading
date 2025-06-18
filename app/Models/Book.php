<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'description',
        'image',
        'status',
        // 'category_id', // REMOVE this line if it's still here. It should NOT be fillable for many-to-many.
    ];

    /**
     * Get the categories that belong to the book (Many-to-Many).
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class)->orderBy('order');
    }

    public function usersInLibrary(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'book_user_library', 'book_id', 'user_id')->withTimestamps();
    }

    public function usersFavorited(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'book_user_favorite', 'book_id', 'user_id')->withTimestamps();
    }

        public function getAvgRatingAttribute()
    {
        return $this->reviews_count ? $this->reviews_sum_rating / $this->reviews_count : 0;
    }
}
