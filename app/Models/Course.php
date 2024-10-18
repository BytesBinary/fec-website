<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory, softDeletes, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'title',
        'description',
        'code',
        'credit',
        'semester',
        'department',
        'assigned_teacher_id',
    ];

    protected static function boot() {
         parent::boot();
         static::creating(function ($model) {
             if( empty($model->{$model->getKeyName()}) ) {
                 $model->{$model->getKeyName()} = Str::uuid()->toString();
             }
         });
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_teacher_id', 'id');
    }
}
