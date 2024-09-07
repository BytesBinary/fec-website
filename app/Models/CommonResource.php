<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'date',
        'pdf',
    ];
}
