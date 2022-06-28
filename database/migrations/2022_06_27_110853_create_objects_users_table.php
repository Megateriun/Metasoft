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
    public function up()
    {
        Schema::create('objects_users', function (Blueprint $table) {
/**/
            $table->id();

            $table->unsignedBigInteger('owner'); // llave foranea de usuarios
            $table->foreign('owner')->references('id')->on('users'); // definicion de foranea de usuarios

            $table->unsignedBigInteger('state'); // llave foranea de estados
            $table->foreign('state')->references('id')->on('objects_states'); // definicion de foranea de estados

            $table->unsignedBigInteger('action'); // llave foranea de accion (se compra o se vende)
            $table->foreign('action')->references('id')->on('actions'); // definicion de foranea de accion
            
            $table->string('name_object');
            $table->text('description');
            $table->string('image');
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
        Schema::dropIfExists('objects_users');
    }
};
