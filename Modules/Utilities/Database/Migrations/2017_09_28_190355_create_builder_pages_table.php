<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuilderPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('builder_pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_id')->unsigned();
			$table->integer('custom_module_id');
			$table->string('position', 1);
			$table->integer('order');
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
		Schema::drop('builder_pages');
	}

}
