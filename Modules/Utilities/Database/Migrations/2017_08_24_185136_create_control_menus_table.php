<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateControlMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('control_menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('control_page_id')->unsigned();
			$table->integer('_lft')->unsigned()->default(0);
			$table->integer('_rgt')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->string('url_path', 191);
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
		Schema::drop('control_menus');
	}

}
