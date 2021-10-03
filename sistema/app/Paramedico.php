<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paramedico extends Model
{
    protected $table = 'paramedico';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nombre', 'paterno', 'materno', 'sexo', 'condicion','email','rol'];

    protected $guarded = [];
}
