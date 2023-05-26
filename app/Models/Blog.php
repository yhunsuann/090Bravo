<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BlogTranslate;

class Blog extends Model
{
    protected $table = 'blogs';
    use HasFactory;
    use SoftDeletes;
    const UPDATED_AT = NULL;
  
    protected $fillable = [
    'status',
    'image',
    'created_at',
    'updated_at'
    ];
    
    public function blogTranslates()
    {
        return $this->hasMany(BlogTranslate::class, 'blog_id', 'id');
    }
}
