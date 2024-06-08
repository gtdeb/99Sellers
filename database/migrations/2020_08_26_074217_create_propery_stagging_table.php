<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProperyStaggingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propery_stagging', function(Blueprint $table)
		{
			$table->increments('stagging_id');
			$table->integer('property_id')->unsigned()->default(0);
			$table->enum('status', ['shortlist','flag','review','download','add','edit','remove','multiple']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('propery_stagging');
	}

}
