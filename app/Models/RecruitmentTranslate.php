<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentTranslate extends Model
{
    use HasFactory;
    protected $table = 'recruitment_translates';
    const UPDATED_AT =  NULL;
    const CREATED_AT =  NULL;
    protected $fillable = [
        'recruitment_id', 
        'language_code', 
        'title', 
        'content', 
        'description'
    ];
    public function language()
    {
        return $this->belongsTo(Language::class,'language_code', 'language_code');
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class,'recruitment_id', 'id');
    }
}
