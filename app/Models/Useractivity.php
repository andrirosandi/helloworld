<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useractivity extends Model
{
    use HasFactory, HasUuids;
    // protected $table = 'useractivities';
    protected $fillable = [
        'user_id',
        'activity',
        'input',
        'responsestatus',
        'responsereturn',
    ];
}
