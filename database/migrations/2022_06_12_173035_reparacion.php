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
    /*CREATE TABLE `reparacion` (
  `id_reparacion` int(11) NOT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL */
    public function up()
    {
        Schema::create('reparacion',function(Blueprint $table){
            $table->increments('id_reparacion');
            $table->decimal('precio',$precision=6,$scale=2);
            $table->text('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparacion');
    }
};
