<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutmes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('personaldescription')->nullable();
            $table->string('service')->nullable();
            $table->string('servicedescription')->nullable();
            $table->string('typeproyect')->nullable();
            $table->string('titleproyect')->nullable();
            $table->string('titleproyectdescription')->nullable();
            $table->string('proyectdescription')->nullable();
            $table->string('review')->nullable();
            $table->string('namehumanreview')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutmes');
    }
}
