<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Designation extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'designation',
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
