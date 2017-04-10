<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'id_curso';

    public $timestamps = false;

    protected $fillable = ['nombre', 'descripcion', 'duracion',
        'fecha_inicio', 'fecha_final', 'estado'];


    public function students(){
        return $this->hasMany('/App/Model/Matricula', 'curso');
    }

    public function weeks(){
        return $this->hasMany('/App/Model/Semana','curso');
    }
}
