<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'media';
    protected $fillable = [
        'originalname',
        'type',
        'filesize',
        'public',
        'blocked',
        'uploader',
    ];
}
