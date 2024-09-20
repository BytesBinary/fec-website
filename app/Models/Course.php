<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'title',
        'description',
        'semester',
        'slug',
        'enrolled_teacher_id'
    ];
}
