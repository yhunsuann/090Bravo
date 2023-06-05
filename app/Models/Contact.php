<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    use HasFactory;
    const UPDATED_AT = NULL;
    protected $fillable = [
    'full_name',
    'email',
    'address',
    'phone',
    'message',
    'created_at'
    ];

}
