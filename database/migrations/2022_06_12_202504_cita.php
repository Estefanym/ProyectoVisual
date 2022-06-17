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
        Schema::create('cita',function(Blueprint $table){
            $table->increments('id_cita');
            $table->date('dia');
            $table->set('sucursal',['Ala Norte','Ala Sur','Ala Oeste','Ala Este']);
            $table->integer('id_tecnico')->unsigned();
            $table->foreign('id_tecnico')->references('id_tecnico')->on('tecnico');
            $table->integer('id_reparacion')->unsigned();
            $table->foreign('id_reparacion')->references('id_reparacion')->on('reparacion');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cita', function (Blueprint $table) {
            $table->dropForeign('cita_id_tecnico_foreign');
            $table->dropForeign('cita_id_reparacion_foreign');
        });
    }
};
