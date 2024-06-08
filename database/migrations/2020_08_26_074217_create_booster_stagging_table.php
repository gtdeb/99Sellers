<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoosterStaggingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booster_stagging', function(Blueprint $table)
		{
			$table->increments('stagging_id');
			$table->integer('booster_id')->unsigned()->default(0);
			$table->enum('status', ['shortlist','review','download','flag','comment','post','curation','add','edit','copy','move','remove']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booster_stagging');
	}

}
