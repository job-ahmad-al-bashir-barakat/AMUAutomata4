<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStepTextLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step_text_langs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('step_id')->index('step_id');
			$table->integer('lang_id')->index('lang_id');
			$table->string('text', 500);
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
		Schema::drop('step_text_langs');
	}

}
