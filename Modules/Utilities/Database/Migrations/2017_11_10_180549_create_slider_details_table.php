<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSliderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slider_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('slider_id')->index('slider_id');
			$table->integer('image_id')->nullable()->index('image_id');
			$table->integer('page_id')->index('page_id');
			$table->string('position', 1)->nullable();
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
		Schema::drop('slider_details');
	}

}
