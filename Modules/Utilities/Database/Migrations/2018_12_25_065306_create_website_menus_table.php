<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('type');
            // title en,ar
            $table->unsignedInteger('table_id')->nullable();
            $table->string('record_id')->nullable();
            $table->string('prefix');
            $table->boolean('clear_stack');
            $table->unsignedInteger('order');
            $table->string('_lft');
            $table->string('_rgt');
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
        Schema::dropIfExists('website_menus');
    }
}
