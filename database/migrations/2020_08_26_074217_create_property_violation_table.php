<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyViolationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_violation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('property_id')->unsigned()->nullable();
			$table->string('complaint')->nullable();
			$table->string('issue_date')->nullable();
			$table->string('types')->nullable();
			$table->string('short_desc')->nullable();
			$table->text('details', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_violation');
	}

}
