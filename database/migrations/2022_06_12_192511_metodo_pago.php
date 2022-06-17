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
        Schema::create('metodo_pago',function(Blueprint $table){
            $table->increments('id_metodo');
           $table->set('tipo_metodo',['Tarjeta','PayPal']);
           $table->integer('id_datos')->unsigned(); 
           $table->foreign('id_datos')->references('id_datos')->on('datos');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metodo_pago', function (Blueprint $table) {
            $table->dropForeign('metodo_pago_id_datos_foreign');
        });
    }
};
