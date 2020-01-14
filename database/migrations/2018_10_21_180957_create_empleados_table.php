<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identificacion');
            $table->string('name',50);
            $table->string('apellido',50);
            $table->string('telefono', 20);
            $table->string('correoelectronico',50);
            $table->integer('id_tipovinculacion')->unsigned();
            $table->foreign('id_tipovinculacion')->references('id')->on('tipo_vinculacions');
            $table->date('fechadenacimiento');
            $table->double('salario');
            $table->integer('id_cargo')->unsigned();
            $table->foreign('id_cargo')->references('id')->on('cargos'); 
            $table->integer('id_sede')->unsigned();
            $table->foreign('id_sede')->references('id')->on('sedes');
            $table->date('fechadeingreso');
            $table->enum('estado',['ACTIVO','INACTIVO']);
            $table->enum('genero',['MASCULINO','FEMENINO']); 
            $table->unique('id');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
