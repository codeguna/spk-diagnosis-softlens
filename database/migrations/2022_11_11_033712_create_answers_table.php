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
            $table->boolean('g001');
            $table->boolean('g002');
            $table->boolean('g003');
            $table->boolean('g004');
            $table->boolean('g005');
            $table->boolean('g006');
            $table->boolean('g007');
            $table->boolean('g008');
            $table->boolean('g009');
            $table->boolean('g010');
            $table->boolean('g011');
            $table->boolean('g012');
            $table->boolean('g013');
            $table->boolean('g014');
            $table->boolean('g015');
            $table->boolean('g016');
            $table->boolean('g017');
            $table->boolean('g018');
            $table->boolean('g019');
            $table->boolean('g020');
            $table->boolean('g021');
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
