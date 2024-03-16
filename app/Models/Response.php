<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'response',
        'module',
        'ref_id',
        'user_id',
    ];
}
