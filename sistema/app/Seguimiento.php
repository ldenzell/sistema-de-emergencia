<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Seguimiento extends Model
{
    protected $table = 'seguimiento_paciente';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['paciente_id', 'descripcion'];

    protected $guarded = [];

    public function paciente()
    {
        return $this->HasOne(Paciente::class,'id','paciente_id');
    }
}