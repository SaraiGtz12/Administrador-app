<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados_republica';
    protected $primaryKey = 'idEstado';
    protected $fillable = ['nombreEstado'];
    public $timestamps = true;
}
