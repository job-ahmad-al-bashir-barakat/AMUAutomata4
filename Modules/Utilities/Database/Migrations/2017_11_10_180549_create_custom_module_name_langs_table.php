<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomModuleNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_module_name_langs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('custom_module_id')->index('custom_module_id');
			$table->integer('lang_id')->index('lang_id');
			$table->string('text', '512')->nullable();
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
		Schema::drop('custom_module_name_langs');
	}

}
