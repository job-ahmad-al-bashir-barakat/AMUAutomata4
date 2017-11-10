<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteMenuNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_menu_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('site_menu_id')->nullable()->index('site_menu_id');
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
		Schema::drop('site_menu_name_langs');
	}

}
