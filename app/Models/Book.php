<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_id',
        'publishing_office_id',
        'short_description',
        'category',
        'cover',
        'is_published',
        'is_recommended'
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function publishingOffice() {
        return $this->belongsTo(PublishingOffice::class);
    }
}

