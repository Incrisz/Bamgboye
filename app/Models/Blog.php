<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['id','title','image','body','editor','publish'];

   // protected $table = 'blogs';

   
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_categories')->withTimestamps();
    }
    public function scopeEdit($query)
    {
        return $query->where('editor', 1);
    }
    public function scopePublish($query)
    {
        return $query->where('publish', 1);
    }
    
  
}
