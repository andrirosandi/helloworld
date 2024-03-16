<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menupermission extends Model
{
    use HasFactory;
    // protected $table = 'menupermissions';
    protected $fillable = [
        'menu_id',
        'usergroup_id',
        'allowed',
    ];
}
