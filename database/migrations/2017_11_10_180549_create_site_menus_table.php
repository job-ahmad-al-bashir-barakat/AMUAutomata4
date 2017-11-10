<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('_lft')->unsigned()->default(0);
			$table->integer('_rgt')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('order')->unsigned();
			$table->boolean('is_link')->default(0);
			$table->integer('menuable_id')->unsigned()->nullable();
			$table->string('menuable_type', 191)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->index(['menuable_id','menuable_type']);
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
		Schema::drop('site_menus');
	}

}
