<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SchoolClass extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'class_number',
        'class_letter',
        'second_title',
        'school_id',
        'teacher_id',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}

