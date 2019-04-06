<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lang_code', 191);
			$table->string('name', 191);
            $table->string('native', 191);
            $table->string('script', 191)->nullable();
            $table->string('regional', 191)->nullable();
            $table->text('font_url')->nullable();
            $table->string('font_family', 191)->nullable();
			$table->integer('image_id')->unsigned()->nullable();
			$table->boolean('is_default');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('langs');
	}

}
