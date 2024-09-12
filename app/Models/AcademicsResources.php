<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicsResources extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'publish_date',
        'type',
        'pdf',
    ];
}
