<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'city',
        'description',
        'price',
        'categorie_id',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
