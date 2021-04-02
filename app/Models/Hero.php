<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job_type_id',
        'phrase_id',
        'logo',
    ];

    public function phrases() {
        return $this->belongsTo(Phrase::class, 'phrase_id');
    }
}

