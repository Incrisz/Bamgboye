<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['id','title','image','video','caption','duration','body','editor','publish'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_videos')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_videos')->withTimestamps();
    }
}
