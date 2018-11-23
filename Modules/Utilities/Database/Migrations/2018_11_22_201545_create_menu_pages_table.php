<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_pages', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('menu_id');
            $table->string('color');
            $table->integer('buildable_id')->unsigned()->nullable()->index('buildable_id');
            $table->string('buildable_type', 191)->nullable();
            $table->integer('optional_id')->unsigned()->nullable()->index('optional_id');
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
		Schema::drop('menu_pages');
	}

}
