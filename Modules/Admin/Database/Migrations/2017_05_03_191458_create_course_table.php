<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('code');
            $table->integer('credit');
            $table->integer('faculty_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->integer('degree_id')->nullable()->unsigned();
            $table->integer('semester_id')->nullable()->unsigned();
            $table->integer('faculty_study_year_id')->nullable()->unsigned();
            $table->integer('image_id')->unsigned();
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
        Schema::dropIfExists('courses');
    }
}
