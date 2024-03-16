<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory, HasUuids;
    // protected $table = 'forms';
    protected $fillable = [
        'status',
        'blocked',
        'author',
        'title',
        'slug',
        'datelimit',
    ];
}
