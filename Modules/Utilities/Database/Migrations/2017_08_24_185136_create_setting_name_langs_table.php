<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('setting_id')->unsigned()->nullable()->index('setting_id');
			$table->integer('lang_id')->unsigned()->nullable()->index('lang_id');
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
		Schema::drop('setting_name_langs');
	}

}
