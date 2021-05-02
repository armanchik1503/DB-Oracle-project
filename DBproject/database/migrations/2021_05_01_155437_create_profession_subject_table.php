<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession_subject', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profession_id');
            $table->bigInteger('subject_id');
            $table->timestamps();

            $table->foreign('profession_id')->references('id')->on('professions')->onDelete('cascade');

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profession_subject');
    }
}
