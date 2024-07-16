<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    public function metas()
    {
        return $this->hasMany(PageMetas::class, 'page_id');
    }
}
