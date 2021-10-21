<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educacions', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->nullable();
            $table->string('degree')->nullable();
            $table->string('start_date')->nullable();
            $table->string('finish_date')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('educacions');
    }
}
