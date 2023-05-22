<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTranslate extends Model
{
    use HasFactory;
    protected $table = 'blog_translates';
    const UPDATED_AT =  NULL;
    const CREATED_AT =  NULL;
    protected $fillable = [
        'blog_id', 
        'language_code', 
        'title', 
        'content', 
        'description'];
    public function language()
    {
        return $this->belongsTo(Language::class,'language_code', 'language_code');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class,'blog_id', 'id');
    }
}
