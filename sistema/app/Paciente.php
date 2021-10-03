<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nombres',
        'paterno',
        'materno',
        'ci',
        'sexo',
        'edad',
        'email',
        'password',
        'presion_arterial',
        'frecuencia_respiratoria',
        'pulso',
        'temperatura',
        'condicion',
        'alergias'
    ];

    protected $guarded = [];
}
