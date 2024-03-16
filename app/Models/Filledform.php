<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filledform extends Model
{
    use HasFactory, HasUuids;
    // protected $table = 'filledforms';
    protected $fillable = [
        'form_id',
        'user',
        'content',
    ];
}
