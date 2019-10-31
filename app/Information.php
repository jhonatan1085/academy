<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public $table = 'information';
    public $fillable = ['nombre','direccion','fecha', 't_institucion', 'ruc'];
}
