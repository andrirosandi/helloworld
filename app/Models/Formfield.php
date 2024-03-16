<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formfield extends Model
{
    use HasFactory, HasUuids;
    // protected $table = 'formfields';
    protected $fillable = [
        'form_id',
        'system',
        'sequence',
        'caption',
        'default_value',
        'type',
        'required',
    ];
}
