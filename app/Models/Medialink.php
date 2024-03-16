<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medialink extends Model
{
    use HasFactory;
    protected $fillable = [
        'module',
        'ref_id',
        'media_id',
    ];
}
