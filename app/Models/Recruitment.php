<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\RecruitmentTranslate;

class Recruitment extends Model
{
    protected $table = 'recruitments';
    use HasFactory;
    use SoftDeletes;
    const UPDATED_AT = NULL;
  
    protected $fillable = [
    'status',
    'image',
    'created_at',
    'updated_at',
    'deleted_at'
    ];
    
    public function recruitmentTranslates()
    {
        return $this->hasMany(RecruitmentTranslate::class, 'recruitment_id', 'id');
    }
}
