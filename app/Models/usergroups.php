<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergroups extends Model
{
    use HasFactory;
    protected $table = 'usergroups';
    protected $fillable = [
        'id',
        'description',
        'blocked',
    ];


}
