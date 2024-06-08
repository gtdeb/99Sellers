<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media', function(Blueprint $table)
		{
			$table->increments('media_id');
			$table->text('location', 65535);
			$table->string('upload_file_name', 200);
			$table->string('extension', 50);
			$table->enum('content_type', ['normal','premium']);
			$table->enum('IsTag', ['no','yes']);
			$table->enum('IsCategories', ['no','yes']);
			$table->enum('pinned', ['no','yes']);
			$table->enum('flag', ['yes','no']);
			$table->enum('post', ['yes','no']);
			$table->enum('comment', ['yes','no']);
			$table->enum('review', ['yes','no'])->nullable();
			$table->enum('downloadable', ['no','yes']);
			$table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->enum('status', ['active','inactive']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media');
	}

}
