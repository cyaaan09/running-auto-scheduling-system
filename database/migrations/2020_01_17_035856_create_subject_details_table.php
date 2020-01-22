<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');

            $table->string('type_id');
            $table->float('duration');
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
        Schema::dropIfExists('subject_details');
    }
}
