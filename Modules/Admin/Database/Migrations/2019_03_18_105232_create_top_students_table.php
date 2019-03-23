<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('study_semester_id');
            $table->unsignedInteger('study_year_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('rank_id');
            $table->float('gpa', '4', '2');
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
        Schema::dropIfExists('top_students');
    }
}
