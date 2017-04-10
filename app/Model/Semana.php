<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    protected $table = 'semana';
    protected $primaryKey = 'id_semana';

    public $timestamps = false;

    protected $fillable = ['tema','visible','estado','curso'];

    public function course(){
        return $this->belongsTo('/App/Model/Curso','curso');
    }
}
