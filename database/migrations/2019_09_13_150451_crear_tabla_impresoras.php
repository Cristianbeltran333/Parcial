<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImpresoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_impresora');
            $table->json('caracteristicas');
            $table->bigInteger('dependencia_id')->unsigned();
            $table->integer('estado');
            $table->foreign('dependencia_id')->references('id')->on('dependencias')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impresoras');
    }
}
