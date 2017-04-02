<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';
    protected $primaryKey = 'id_matricula';
    public $timestamps = false;

    protected $fillable = ['periodo', 'ano', 'curso', 'usuario'];


    public function user(){
        return $this->belongsTo('App\Model\Usuario', 'usuario');
    }

    public function course(){
        return $this->belongsTo('App\Model\Curso','curso');
    }
}
