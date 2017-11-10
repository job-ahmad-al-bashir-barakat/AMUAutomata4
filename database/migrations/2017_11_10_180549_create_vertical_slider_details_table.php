<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVerticalSliderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vertical_slider_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vertical_slider_id')->unsigned()->index('vertical_slider_id');
			$table->integer('image_id')->unsigned()->nullable()->index('image_id');
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
		Schema::drop('vertical_slider_details');
	}

}
