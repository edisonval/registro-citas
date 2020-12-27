<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_trabajos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('dia');
            $table->boolean('activo');

            $table->time('mañana');
            $table->time('mañanafin');

            $table->time('tarde');
            $table->time('tardefin');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('dia_trabajos');
    }
}
