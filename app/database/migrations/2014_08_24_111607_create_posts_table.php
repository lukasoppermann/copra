<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fs_posts', function(Blueprint $table)
		{
			// storage engine
			$table->engine = 'MyISAM';
			// fields
			$table->increments('id',true);
			$table->integer('article_id');
			$table->string('stream',255);
			$table->integer('position');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fs_posts');
	}

}
