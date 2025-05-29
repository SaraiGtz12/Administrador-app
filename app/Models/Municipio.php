<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";
    protected $primaryKey = 'idMunicipio';
    protected $fillable = ['nombreMunicipio', 'estadoId'];
    public $timestamps = true;
}
