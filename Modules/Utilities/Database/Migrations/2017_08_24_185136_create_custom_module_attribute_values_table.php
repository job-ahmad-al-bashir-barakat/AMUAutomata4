<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomModuleAttributeValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_module_attribute_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('custom_module_id')->index('custom_module_id');
			$table->integer('attribute_id')->index('attribute_id');
			$table->text('value', 65535);
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
		Schema::drop('custom_module_attribute_values');
	}

}
