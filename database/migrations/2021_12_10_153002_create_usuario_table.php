<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable ('usuario')){
            Schema::create('usuario', function (Blueprint $table) {
                $table->bigIncrements('id_usuario');
                $table->timestamps();
                $table->string('nombre');
                $table->string('apellidos');
                $table->string('DNI', 10)->unique();
                $table->string('email');
                $table->bigInteger('telefono');
                $table->string('contraseña')->nullable(false);           
                $table->string('categoria')->nullable(false);
                $table->unsignedBigInteger('id_sede');
                $table->foreign('id_sede')->references('id_sede')->on('sedes')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
