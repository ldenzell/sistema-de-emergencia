<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambulancia extends Model
{
    protected $table = 'ambulancia';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'placa',
        'tipo',
        'modelo',
        'marca',
        'condicion',
    ];

    protected $guarded = [];
}
