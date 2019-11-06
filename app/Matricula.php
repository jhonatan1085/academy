<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    public $table = 'matricula';
    public $fillable = ['codigo','fecha','alumno_id'];

    public function alumno(){
        return $this->belongsTo('App\Alumno');
    }
}
