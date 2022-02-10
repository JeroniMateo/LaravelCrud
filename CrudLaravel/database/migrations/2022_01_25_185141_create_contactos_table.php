<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre')->required();
            $table->string('apellidos')->required();
            $table->integer('telefono')->required()->unique();
            
            $table->string('tipo')->nullable();
            $table->date('birthday')->nullable();
            $table->string('relationship')->nullable();
            $table->string('description')->nullable();
            $table->boolean('favorites')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
