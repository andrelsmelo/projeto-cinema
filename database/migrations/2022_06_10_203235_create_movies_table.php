<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->longText('poster');
            $table->time('duration');
            $table->year('release');
            $table->unsignedBigInteger('pegi_id');
            $table->foreign('pegi_id')->references('id')->on('pegis');
            $table->unsignedBigInteger('genre_id')->nullable($value = true);
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->text('sinopse');
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
        Schema::dropIfExists('movies');
    }
}
