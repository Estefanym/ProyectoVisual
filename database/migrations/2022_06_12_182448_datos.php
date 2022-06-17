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
    /*CREATE TABLE `datos` (
  `id_datos` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `cvv` int(16) NOT NULL,
  `fecha_vencimiento` date */
    public function up()
    {
        Schema::create('datos',function(Blueprint $table){
            $table->increments('id_datos');
            $table->string('numero',16);
            $table->string('cvv',3);
            $table->date('fecha_vencimiento','MM-AA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
};
