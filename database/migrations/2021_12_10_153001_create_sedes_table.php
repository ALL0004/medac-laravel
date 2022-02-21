<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations. Creamos las tablas de las bbdd
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sedes')){
            Schema::create ('sedes', function (Blueprint $table){ //blueprint, plantilla de la tabla
                $table->bigIncrements("id_sede");//campo autoincrementado
                $table->string("sector", 30)->nullable(false);
                $table->string("localizacion")->nullable(false);
                $table->timestamps();
         });        
        }
    }
   

    /**
     * Reverse the migrations.Se cierra la conexion
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sedes');
    }
}
