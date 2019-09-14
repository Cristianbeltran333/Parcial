<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{


   protected $table = 'impresoras';

   protected $fillable = [
   	    'nombre_impresora',
		'caracteristicas',
		'dependencia_id',
		'estado'		
	];
      
    protected $casts = [ 
       'caracteristicas' => 'array',
    ];  

    public function dependencia()
    {
    	return $this->belongsTo(Dependencia::class);
    }

    public function setCaracteristicaAttribute($value)
    {   
    	$this->attributes['nombre_impresora'] = ucfirst(strtolower($value));
    }


}
