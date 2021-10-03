<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    protected $table = 'emergencia';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'latitude',
        'longitude',
        'paciente_id',
    ];

    protected $guarded = [];

    public function paciente()
    {
        return $this->HasOne(Paciente::class, 'id', 'paciente_id');
    }
}