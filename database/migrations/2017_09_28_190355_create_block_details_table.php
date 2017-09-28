<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('block_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('block_id')->unsigned()->index('block_id');
			$table->integer('icon_id')->unsigned()->index('icon_id');
			$table->integer('page_id')->unsigned()->index('page_id');
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
		Schema::drop('block_details');
	}

}
