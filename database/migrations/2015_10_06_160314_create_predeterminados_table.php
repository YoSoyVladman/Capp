<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredeterminadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predeterminados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catalogo_id')->unsigned();
            $table->string('nombre',30);
            $table->text('descripcion');
            $table->float('precio');
            $table->string('url_img',50);
            $table->string('proveedor',30);
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
        Schema::drop('predeterminados');
    }
}
