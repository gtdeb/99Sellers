<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyAuctionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_auction', function(Blueprint $table)
		{
			$table->increments('AAuctionID');
			$table->dateTime('AAuctionDateTime')->nullable();
			$table->string('AAuctionPlace')->nullable();
			$table->string('AAuctionPlaceAddr1')->nullable();
			$table->string('AAuctionPlaceAddr2', 100)->nullable();
			$table->string('AAuctionCity', 30)->nullable();
			$table->char('AAuctionState', 2)->nullable();
			$table->integer('AAuctionZip')->nullable();
			$table->text('AAuctionDescription', 65535)->nullable();
			$table->integer('APropertyID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_auction');
	}

}
