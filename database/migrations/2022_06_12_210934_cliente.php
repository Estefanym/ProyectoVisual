<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente',function(Blueprint $table){
            $table->increments('id_cliente');
            $table->string('nombre',50);
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contraseña',15);
            $table->string('telefono',10);
            $table->string('direccion');
            $table->integer('id_metodo')->unsigned();
            $table->foreign('id_metodo')->references('id_metodo')->on('metodo_pago');
            $table->integer('id_cita')->unsigned();
            $table->foreign('id_cita')->references('id_cita')->on('cita');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->dropForeign('cliente_id_metodo_foreign');
            $table->dropForeign('cliente_id_cita_foreign');
        });
    }
};
