<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\True_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

/*
$table->timestamp('email_verified_at')->nullable();
$table->rememberToken();
$table->integer('votes');
*/

            $table->id();

            $table->unsignedBigInteger('role'); // llave foranea
            $table->foreign('role')->references('id')->on('users_roles'); // definicion de foranea

            $table->integer('document');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password'); 
            $table->boolean('state')->default(TRUE);;
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
        Schema::dropIfExists('users');
    }
};
