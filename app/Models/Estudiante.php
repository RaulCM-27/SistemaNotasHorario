<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $primaryKey = 'idEstu';

    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'idEstu',
        'nombreEstu',
        'apellidoEstu',
        'nombreAcu',
        'apellidoAcu',
        'telefono'
    ];
}
