<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'city',
        'email',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}

