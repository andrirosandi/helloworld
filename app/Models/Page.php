<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory, HasUuids;
    // protected $table = 'pages';
    protected $fillable = [
        'slug',
        'title',
        'author',
        'blocked',
        'content',
        'status',
    ];
}
