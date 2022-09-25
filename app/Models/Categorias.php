<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_categorias';
    
    protected $fillable = [
        'name',
        'year_in',
        'year_out',
    ];
    
    protected $casts = [
        'year_in' => 'integer',
        'year_out' => 'integer',
    ];
}