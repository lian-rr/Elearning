<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuario_rol';
    protected $primaryKey = 'id_usuario_rol';

    public $timestamps = false;

    protected $fillable = ['usuario','rol','estado'];


}
