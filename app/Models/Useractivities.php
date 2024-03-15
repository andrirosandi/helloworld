<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useractivities extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'useractivities';
    protected $fillable = [
        'user_id',
        'activity',
        'input',
        'responsestatus',
        'responsereturn',
    ];
}
