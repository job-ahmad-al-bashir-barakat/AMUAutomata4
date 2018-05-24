<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('type');
            $table->integer('image_260_id')->nullable()->unsigned();
            $table->integer('image_360_id')->nullable()->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('job_title_id')->unsigned();
            $table->integer('contact_id')->unsigned();
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
        Schema::dropIfExists('people');
    }
}
