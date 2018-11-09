<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleDescriptionLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_description_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->nullable()->index('module_id');
            $table->integer('lang_id')->nullable()->index('lang_id');
            $table->string('text', 191)->nullable();
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
        Schema::dropIfExists('module_description_langs');
    }
}