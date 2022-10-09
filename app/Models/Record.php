<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'hero',
        'record',
        'record_image',
        'remarks',
        'created_at',
        'updated_at',
    ];
}
