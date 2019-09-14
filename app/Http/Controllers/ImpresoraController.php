<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Impresora;

class ImpresoraController extends Controller
{
	public function index()
    {
      	$impresora = Impresora::find(5);
    	return $impresora;	
    }
    
}
