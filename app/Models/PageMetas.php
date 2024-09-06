<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMetas extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'meta_key',
        'meta_value',
        'meta_type',
        'meta_status',
        'meta_visibility'
    ];

    public function page()
    {
        return $this->belongsTo(Pages::class, 'page_id' );
    }
}
