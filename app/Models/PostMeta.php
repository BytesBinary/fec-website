<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class PostMeta extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'post_id',
        'meta_key',
        'meta_value',
    ];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($model) {
            if( empty($model->{$model->getKeyName()}) ) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
