<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
    use HasFactory;

    public function tag_gallerie()
    {
        return $this->belongsTo(TagGallerie::class);
    }
}
