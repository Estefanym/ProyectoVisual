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
        Schema::create('pedido',function(Blueprint $table){
            $table->increments('id_pedido');
            $table->integer('piezas');
            $table->set('tipo_entrega',['A DOMICILIO','EN TIENDA']);
            $table->date('fecha_entrega');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('producto');
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->integer('id_garantia')->unsigned();
            $table->foreign('id_garantia')->references('id_garantia')->on('garantia');
            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign('pedido_id_producto_foreign');
            $table->dropForeign('pedido_id_cliente_foreign');
            $table->dropForeign('pedido_id_garantia_foreign');
        });
    }
};
