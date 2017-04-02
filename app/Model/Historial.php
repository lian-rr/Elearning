<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'historial';
    protected $primaryKey = 'id_historial';
    public $timestamps = false;

    protected $fillable = ['usuario','ip','os','navegador'];
}
