<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomModuleAttributeValueMultiLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_module_attribute_value_multi_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('custom_module_attribute_value_id')->index('custom_module_attribute_value_id');
			$table->integer('lang_id')->index('lang_id');
			$table->longText('text')->nullable();
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
		Schema::drop('custom_module_attribute_value_multi_langs');
	}

}
