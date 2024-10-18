<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Batch extends Model
{
    use HasFactory, softDeletes, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'name',
        'number',
        'session',
    ];

    protected static function boot() {
         parent::boot();
         static::creating(function ($model) {
             if( empty($model->{$model->getKeyName()}) ) {
                 $model->{$model->getKeyName()} = Str::uuid()->toString();
             }
         });
     }
}
