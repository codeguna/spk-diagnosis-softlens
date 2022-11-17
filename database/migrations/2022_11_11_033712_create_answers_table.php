<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_diagnosis')->unsigned();
            $table->boolean('g001')->nullable();
            $table->boolean('g002')->nullable();
            $table->boolean('g003')->nullable();
            $table->boolean('g004')->nullable();
            $table->boolean('g005')->nullable();
            $table->boolean('g006')->nullable();
            $table->boolean('g007')->nullable();
            $table->boolean('g008')->nullable();
            $table->boolean('g009')->nullable();
            $table->boolean('g010')->nullable();
            $table->boolean('g011')->nullable();
            $table->boolean('g012')->nullable();
            $table->boolean('g013')->nullable();
            $table->boolean('g014')->nullable();
            $table->boolean('g015')->nullable();
            $table->boolean('g016')->nullable();
            $table->boolean('g017')->nullable();
            $table->boolean('g018')->nullable();
            $table->boolean('g019')->nullable();
            $table->boolean('g020')->nullable();
            $table->boolean('g021')->nullable();
            $table->timestamps();

            $table->foreign('id_diagnosis')
                ->references('id')
                ->on('diagnoses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
