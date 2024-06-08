<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyZipCityStTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_zip_city_st', function(Blueprint $table)
		{
			$table->string('zip', 20)->nullable();
			$table->string('county')->nullable();
			$table->string('state')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_zip_city_st');
	}

}
