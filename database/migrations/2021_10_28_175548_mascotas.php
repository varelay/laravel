<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('mascotas', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('especie',100);
            $table->string('raza',100);
            $table->integer('edad');
            $table->string('condicion_salud',240);
            $table->string('vacunado',64);
            $table->string('sexo',64);
            $table->string('imagen')->nullable();
            $table->timestamps();
            $table->index('imagen');
            $table->string('status',64)->default('disponible');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
