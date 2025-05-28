<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado_repubica';
    protected $primaryKey = 'idEstado';
    protected $fillable = ['nombreEstado'];
    public $timestamps = true;
}
