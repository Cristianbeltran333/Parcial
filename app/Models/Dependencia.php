<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{

   protected $table = 'dependencias';

   protected $fillable = [
		'nombre_dependencia',
		'nro_piso',
		'sucursal_id',
		'estado'	
	];

    public $casts = ['estado' => 'boolean'];

    protected $appends = ['listado_sucursal', 'listado_impresora'];


    public function sucursal()
    {
    	return $this->belongsTo(Sucursal::class);
    }

    public function impresoras()
    {
    	return $this->hasMany(Impresora::class);
    }

    public function getListadoSucursalAttribute()
    {
        return $this->sucursal;
    }

    public function getListadoImpresoraAttribute()
    {
       return $this->impresoras;
    }




}
