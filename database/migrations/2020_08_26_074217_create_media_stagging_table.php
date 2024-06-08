<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaStaggingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_stagging', function(Blueprint $table)
		{
			$table->increments('stagging_id');
			$table->integer('media_id')->unsigned()->default(0);
			$table->enum('status', ['shortlist','review','download','flag','comment','post','curation','add','edit','copy','move','remove','multiple']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_stagging');
	}

}
