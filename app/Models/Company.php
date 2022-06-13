<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use  HasFactory;

  
    protected $fillable = [
        'name', 'fantasy_name', 'address', 'neighborhood', 'number', 'phone', 'email'
    ];
    protected $casts = [
        'name'=>'string', 'fantasy_name'=>'string', 'address'=>'string', 'neighborhood'=>'string', 'number'=>'integer', 'phone'=>'string', 'email'=>'string'
    ];
}
