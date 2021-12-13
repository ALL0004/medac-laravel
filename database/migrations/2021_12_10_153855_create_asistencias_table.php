<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable ('asistencias')){
            Schema::create ('asistencias', function (Blueprint $table){
                $table->bigIncrements('id_asistencia');
                $table->timestamp('Fecha_entrada')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('Fecha_salida')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->boolean('validacion');
                $table->timestamps();
                $table->string('contraseña',30)->nullable(false);
                $table->unsignedBigInteger('id_usuario');
                $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->onDelete ('cascade');
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
        Schema::dropIfExists('asistencias');
    }
}
