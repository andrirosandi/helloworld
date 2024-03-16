<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postpart extends Model
{
    use HasFactory, HasUuids;
    // protected $table = 'postparts';
    protected $fillable = [
        'postid',
        'sequence',
        'content'
    ];
}
