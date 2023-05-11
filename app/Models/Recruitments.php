<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitments extends Model
{
    protected $table = 'recruitments';
    use HasFactory;
    const UPDATED_AT = null;
    protected $fillable = [
    'title',
    'description',
    'content',
    'status',
    'image',
    'created_at',
    'deleted_at'
    ];
}
