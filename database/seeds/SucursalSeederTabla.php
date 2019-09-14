<?php

use Illuminate\Database\Seeder;

class SucursalSeederTabla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sucursales = factory(App\Models\Sucursal::class,5)
        ->create()
        ->each(function ($sucursal){
             $dependencia = factory(App\Models\Dependencia::class)->make();
             $sucursal->dependencias()->save($dependencia);
             $dependencia->impresoras()->save(factory(App\Models\Impresora::class)->make());
        });
    }
}
