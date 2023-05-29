<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslate extends Model
{
    use HasFactory;
    protected $table = 'post_translates';
    const UPDATED_AT =  NULL;

    protected $fillable = [
        'post_id', 
        'language_code', 
        'title', 
        'content', 
        'description'
    ];
    
    public function language()
    {
        return $this->belongsTo(Language::class,'language_code', 'language_code');
    }

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id', 'id');
    }
}
