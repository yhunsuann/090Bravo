<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\RecruitmentTranslate;

class Recruitment extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * don't modifine updated_at
     *
     * @var string
     */
    const UPDATED_AT = NULL;
        
    /**
     * table
     *
     * @var string
     */
    protected $table = 'recruitments';
      
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'status',
        'image',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
        
    /**
     * recruitmentTranslates
     *
     * @return void
     */
    public function recruitmentTranslates()
    {
        return $this->hasMany(RecruitmentTranslate::class, 'recruitment_id', 'id');
    }

    /**
     * recruitmentTranslates
     *
     * @return void
     */
    public function recruitment_default()
    {
        return $this->hasOne(RecruitmentTranslate::class, 'recruitment_id', 'id')->where('language_code', config('app.locale'));
    }
}
