<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PublishingOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'logo',
        'email',
    ];

    public function books() {
        return $this->hasMany(Book::class, 'publishing_office_id');
    }
}

