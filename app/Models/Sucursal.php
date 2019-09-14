<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

   protected $table = 'sucursales';


   protected $fillable = [
		'nombre_sucursal',
		'direccion',
		'cliente',
        'ciudad',
		'estado'
		
	];

	protected $appends = ['sucursal_cliente'];

    public function dependencias()
    {
    	return $this->hasMany(Dependencia::class);
    }

    public function getSucursalClienteAttribute()
    {
    	return "Sucursal: {$this->nombre_sucursal} - Nombre del Cliente: {$this->cliente}";
    }


}
