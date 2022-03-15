<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagGallerie extends Model
{
    use HasFactory;
    public function galleries()
    {
        return $this->hasMany(Gallerie::class);
    }
}
