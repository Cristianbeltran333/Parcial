<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
 public function index()
    {
       $sucursal = Sucursal::find(5);
     return $sucursal;
    }

   
}
