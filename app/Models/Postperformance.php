<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postperformance extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'post_id',
        'views',
        'response',
        'comments',
        'shares',
    ];
}
