<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModuleNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('module_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('module_id')->nullable()->index('gender_id');
			$table->integer('lang_id')->nullable()->index('lang_id');
			$table->string('text', 191)->nullable();
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
		Schema::drop('module_name_langs');
	}

}
