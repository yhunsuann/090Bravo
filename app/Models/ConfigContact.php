<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigContact extends Model
{
    use HasFactory;
    
    /**
     * table
     *
     * @var string
     */
    protected $table = 'config';
        
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'contact_key',
        'type',
        'value'
    ];
    
    /**
     * trans
     *
     * @return void
     */
    public function trans()
    {
        return $this->hasMany(ConfigTranslate::class, 'config_id', 'id');
    }
}
