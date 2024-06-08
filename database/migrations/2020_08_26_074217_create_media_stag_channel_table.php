<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaStagChannelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_stag_channel', function(Blueprint $table)
		{
			$table->increments('channel_id');
			$table->enum('channel_type', ['social network']);
			$table->string('channel_name', 100);
			$table->text('shared_link', 65535)->nullable();
			$table->integer('post_count')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_stag_channel');
	}

}
