<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('graph_type', 191)->nullable();
			$table->integer('graph_image_id')->unsigned()->nullable()->index('graph_image');
			$table->dateTime('article_published_time')->nullable();
			$table->dateTime('article_modified_time')->nullable();
			$table->dateTime('article_expiration_time')->nullable();
			$table->string('profile_username', 191)->nullable();
			$table->string('profile_gender', 191)->nullable();
			$table->string('book_isbn', 191)->nullable();
			$table->dateTime('book_release_date')->nullable();
            $table->string('card_type', 191)->nullable();
			$table->integer('card_image_id')->unsigned()->nullable()->index('card_image');
			$table->integer('buildable_id')->unsigned()->index('buildable_id');
			$table->string('buildable_type', 191);
			$table->integer('optional_id')->unsigned()->nullable()->index('optional_id');
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
		Schema::drop('seos');
	}

}
