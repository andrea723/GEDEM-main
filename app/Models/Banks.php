<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_banks';
    
    protected $fillable = [
        'code',
        'name',
    ];
}
