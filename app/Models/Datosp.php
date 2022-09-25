<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Datosp extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_datosp';
    
    protected $fillable = [
        'nombre',
        'apellido',
        'type_document',
        'nationality',
        'cedula',
        'pais',
        'geplaceBirth',
        'datebirth',
        'civilState',
        'sexualOrigin',
        'anotherOrientation',
        'otraOrientation',
        'particularSigns',
        'instructionLevel',
        'instructionStatus',
        'occupation',
        'laborSkills',
        'numberChildren',
        'parroquia',
        'direction',
        
    ];

    protected $dates = [
        'deleted_at'
    ];
}
