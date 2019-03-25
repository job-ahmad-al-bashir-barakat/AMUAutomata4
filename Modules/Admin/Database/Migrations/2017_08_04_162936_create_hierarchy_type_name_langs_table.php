<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHierarchyTypeNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hierarchy_type_name_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hierarchy_type_id')->unsigned()->nullable()->index('hierarchy_type_id');
            $table->integer('lang_id')->unsigned()->nullable()->index('lang_id');
            $table->string('text', '512')->nullable();
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
        Schema::dropIfExists('hierarchy_type_name_langs');
    }
}
