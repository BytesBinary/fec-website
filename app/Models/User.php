<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable, softDeletes;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'designation',
        'short_name',
        'is_admin_verified',
    ];

    protected $hidden = [
        'password',
        'is_admin_verified',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
     protected static function boot() : void {
         parent::boot();
         static::creating(function ($model) {
             if( empty($model->{$model->getKeyName()}) ) {
                 $model->{$model->getKeyName()} = Str::uuid()->toString();
             }
         });
        static::saving(function ($user) {
            if ($user->is_admin_verified && !$user->email_verified_at) {
                $user->email_verified_at = now();
        }
    });
     }
     public function posts(): HasMany
     {
         return $this->hasMany(Post::class, 'post_author');
     }
}
