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
			$table->integer('custom_module_id');
			$table->string('position', 1)->nullable();
			$table->integer('order');
			$table->integer('buildable_id')->unsigned()->nullable()->index('buildable_id');
			$table->string('buildable_type', 191)->nullable();
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
