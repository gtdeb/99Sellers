<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyTrusteeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_trustee', function(Blueprint $table)
		{
			$table->increments('TTrusteeID');
			$table->text('TTrusteeName')->nullable();
			$table->text('TTrusteeAddress')->nullable();
			$table->string('TTRUSTEECity', 30)->nullable();
			$table->char('TTRUSTEEState', 2)->nullable();
			$table->integer('TTRUSTEEZip')->nullable();
			$table->string('TTrusteePhone', 20)->nullable();
			$table->string('TTrusteeEmail', 100)->nullable();
			$table->string('TTrusteeWebSite', 100)->nullable();
			$table->string('type', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_trustee');
	}

}
