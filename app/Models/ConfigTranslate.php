<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigTranslate extends Model
{
    use HasFactory;
        
    /**
     * timestamp
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * table
     *
     * @var string
     */
    protected $table = 'config_translates';
        
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'config_id',
        'value'
    ];
}
