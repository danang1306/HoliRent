<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->string('kode_bus',10)->unique();
            $table->string('name');
            $table->enum('tipe',['NonHD','HD','SHD','HDD','DD']);
            $table->string('img');
            $table->integer('h_sewa');
            $table->integer('j_kursi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus');
    }
}
