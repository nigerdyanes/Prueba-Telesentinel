<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datos extends Migration
{
    public function up()
    {
        //
        Schema::create('datos', function (Blueprint $table) {
            $table->string('id');
            $table->string('razon_social');
            $table->string('fecha_contacto');
            $table->string('fecha_gestion');
            $table->string('estado_contacto');
            $table->string('tipo_contacto');
            $table->string('en_cotiza');
            $table->string('fecha_cotiza');
            $table->string('en_venta');
            $table->string('fecha_venta');

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
        //
        Schema::dropIfExists('datos');
    }
}
