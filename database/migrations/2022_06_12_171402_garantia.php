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
    /*
CREATE TABLE `garantia` (
  `id_garantia` int(11) NOT NULL */
    public function up()
    {
        Schema::create('garantia',function(Blueprint $table){
            $table->increments('id_garantia');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garantia');
    }
};
