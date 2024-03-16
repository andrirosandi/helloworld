<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actionpermission extends Model
{
    use HasFactory;
    // protected $table = 'actionpermission';
    protected $fillable = [
        'action_id',
        'usergroup_id',
        'allowed',
    ];
}
