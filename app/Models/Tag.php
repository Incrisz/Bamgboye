<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
   
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_tags')->withTimestamps();
    }
    public function audios()
    {
        return $this->belongsToMany(Audio::class, 'audio_tags')->withTimestamps();
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class, 'tag_videos')->withTimestamps();
    }
  
}
