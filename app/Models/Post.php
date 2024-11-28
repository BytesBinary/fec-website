<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'post_title',
        'post_type',
        'post_status',
        'post_category',
        'post_author',
        'post_parent',
        'post_slug',
        'post_content',
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

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'post_author');
    }

    public function postMetas() : HasMany
    {
        return $this->hasMany(PostMeta::class, 'post_id');
    }
}
