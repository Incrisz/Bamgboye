<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_categories')->withTimestamps();
    }
    public function audios()
    {
        return $this->belongsToMany(Audio::class, 'audio_categories')->withTimestamps();
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class, 'category_videos')->withTimestamps();
    }
  
}
