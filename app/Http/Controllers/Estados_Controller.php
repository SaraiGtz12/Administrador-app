<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Http\Request;

class Estados_Controller extends Controller
{
    public function getState(){
        $estados = Estado::all();
        return response()->json($estados);
    }
}
