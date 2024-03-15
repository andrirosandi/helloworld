<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $incrementing = false;
    protected $fillable = [
        'id',
        'environment_id',
        'caption',
        'haschild',
        'parent',
        'action',
        'blocked',
    ];
}
