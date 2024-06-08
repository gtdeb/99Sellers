<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoosterContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booster_content', function(Blueprint $table)
		{
			$table->increments('booster_id');
			$table->text('message_header', 65535)->nullable();
			$table->text('message_body', 65535)->nullable();
			$table->string('attached_media_id', 50)->nullable();
			$table->text('media_search_text', 65535)->nullable();
			$table->enum('nudging_type', ['Popup','SlideDown','SlideToggle','SlideUp','Baloon']);
			$table->text('schedule', 65535)->nullable();
			$table->enum('post', ['yes','no']);
			$table->enum('flag', ['yes','no']);
			$table->enum('comment', ['yes','no']);
			$table->enum('review', ['yes','no']);
			$table->enum('downloadable', ['no','yes']);
			$table->enum('status', ['active','inactive']);
			$table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booster_content');
	}

}
