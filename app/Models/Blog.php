<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author_id',
        'categorie_id',
        'description',
    ];

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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
