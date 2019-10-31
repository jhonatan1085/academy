<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $table = 'alumno';
    public $fillable = ['dni','nombre','fecha_nac'];
}
