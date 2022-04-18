<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;
    protected $fillable = ['id','title','image','audio','caption','duration','body','editor','publish'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'audio_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'audio_categories')->withTimestamps();
    }
}
