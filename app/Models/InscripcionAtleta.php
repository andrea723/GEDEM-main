<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
      
class InscripcionAtleta extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_inscripcion_atletas';
    
    protected $fillable = [
        'type_document',
        'nationality',
        'identification',
        'name',
        'lastname',
        'gender',
        'datebirth',
        'state',
        'municipality',
        'parish',
        'address',
        'email',
        'phone',
        'recordtime',
        'reducedmobility',
        'category',
        'size',
        'runnigclub',
        'accountholder',
        'accountidentification',
        'datepay',
        'bank',
        'reference',
        'amount',
        'accountphone',
        'terms',
        'aproved',
    ];

    protected $dates = [
        'deleted_at'
    ];
}



