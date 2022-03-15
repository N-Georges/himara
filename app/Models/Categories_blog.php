<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_blog extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
