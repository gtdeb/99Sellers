<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyOwnerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_owner', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('OLastName', 50)->nullable();
			$table->string('OMiddleName', 50)->nullable();
			$table->string('OFirstName', 50)->nullable();
			$table->string('OStreetAddr1', 100)->nullable();
			$table->string('OStreetAddr2', 100)->nullable();
			$table->string('OCity', 50)->nullable();
			$table->string('OState', 30)->nullable();
			$table->string('OZip', 20)->nullable();
			$table->integer('OProperty_id')->unsigned()->nullable()->index('owner_FKIndex1');
			$table->integer('insert_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_owner');
	}

}
