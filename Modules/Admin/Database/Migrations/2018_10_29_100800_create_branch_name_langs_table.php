<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_name_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->unsigned()->index('branch_id');
            $table->integer('lang_id')->unsigned()->index('lang_id');
            $table->string('text', 191);
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
        Schema::dropIfExists('branch_name_langs');
    }
}
