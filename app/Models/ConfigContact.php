<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigContact extends Model
{
    protected $table = 'config_contact';
    use HasFactory;
  
    protected $fillable = [
    'name',
    'contact_key',
    'type',
    'value',
    ];

}
