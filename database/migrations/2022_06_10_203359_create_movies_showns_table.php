<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesShownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_showns', function (Blueprint $table) {
            $table->id();
            $table->date('session_date');
            $table->unsignedBigInteger('rooms_id');
            $table->foreign('rooms_id')->references('id')->on('rooms');
            $table->unsignedBigInteger('sessions_id');
            $table->foreign('sessions_id')->references('id')->on('sessions');
            $table->unsignedBigInteger('movies_id');
            $table->foreign('movies_id')->references('id')->on('movies');
            $table->time('movie_duration');
            $table->time('end_of_session');
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
        Schema::dropIfExists('movies_showns');
    }
}
