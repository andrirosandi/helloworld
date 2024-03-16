<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsesummary extends Model
{
    use HasFactory;
    protected $fillable = [
        'response',
        'module',
        'ref_id',
        'total',
    ];
}
