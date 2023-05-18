<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    public function recruitmentTranslates()
    {
        return $this->hasMany(RecruitmentTranslate::class,'language_code', 'language_code');
    }
}
