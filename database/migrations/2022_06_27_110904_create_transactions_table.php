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
        Schema::create('transactions', function (Blueprint $table) {
/**/
            $table->id();

            $table->unsignedBigInteger('owner'); // llave foranea 
            $table->foreign('owner')->references('id')->on('users'); // definicion de foranea 

            $table->unsignedBigInteger('client'); // llave foranea 
            $table->foreign('client')->references('id')->on('users'); // definicion de foranea 

            $table->unsignedBigInteger('state'); // llave foranea 
            $table->foreign('state')->references('id')->on('transactions_states'); // definicion de foranea 

            $table->unsignedBigInteger('objects_users'); // id del objeto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
