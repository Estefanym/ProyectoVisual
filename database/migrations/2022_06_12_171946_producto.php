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
    /*CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria` set('CELULARES','LAPTOPS','ACCESORIOS') DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL */
    public function up()
    {
        Schema::create('producto',function(Blueprint $table){
            $table->increments('id_producto');
            $table->string('nombre',50);
            $table->set('categoria',['CELULARES','LAPTOPS','ACCESORIOS']);
            $table->text('descripcion');
            $table->decimal('precio',$precision=7,$scale=2);
            $table->integer('existencia');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
