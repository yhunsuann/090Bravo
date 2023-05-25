<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PostTranslate;

class Post extends Model
{
    protected $table = 'posts';
    use HasFactory;
    const UPDATED_AT = NULL;
  
    protected $fillable = [
    'status',
    'images',
    'created_at',
    'deleted_at'
    ];
    public function postTranslates()
    {
        return $this->hasMany(PostTranslate::class, 'post_id', 'id');
    }
}
