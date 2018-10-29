<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_list_id')->unsigned()->nullable();
            $table->integer('_lft')->unsigned()->default(0);
            $table->integer('_rgt')->unsigned()->default(0);
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('order')->unsigned();
            $table->string('prefix')->nullable();
            $table->string('url',500)->nullable();
            $table->boolean('is_link')->default(0)->nullable();
            $table->nullableMorphs('menuable');
            $table->string('dynamic')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['_lft','_rgt','parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_menu');
    }
}
