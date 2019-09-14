<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    public function index()
    {
      $dependencia = Dependencia::find(5);
      return $dependencia;	
    }
    
}
