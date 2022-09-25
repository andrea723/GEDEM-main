<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DatoSalud extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_salud';
    
    protected $fillable = [
        'presEmbarazo',
        'espeEmba',
        'espeForen',
        'presHeri',
        'espeHeri',
        'poseTrataMedico',
        'espeTratamiento',
        'poseEnferGeneral',
        'espeEnfeGeneral',
        'poseEnferesPecífica',
        'espeEnfeEsPecífica',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
