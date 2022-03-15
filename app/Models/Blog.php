<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categories_blog::class);
    }

    public function tag_blogs()
    {
        return $this->belongsToMany(TagBlog::class, 'pivot_blogs_tags');
    }
}
