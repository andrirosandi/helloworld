<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taglink extends Model
{
    use HasFactory;
    // protected $table = 'taglinks';
    protected $fillable = [

        'module',
        'ref_id',
        'tag_id',
    ];
}
