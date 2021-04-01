<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ReaderInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'address',
        'email',
        'service_address',
        'global_date',
        'max_class',
    ];
}

