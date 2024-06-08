<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('PStreetAddr1', 100)->nullable();
			$table->string('PStreetAddr2', 100)->nullable();
			$table->string('Pcity', 50)->nullable();
			$table->string('Pstate', 30)->nullable();
			$table->string('Pzip', 20)->nullable();
			$table->string('Pcounty', 50)->nullable();
			$table->string('PBase', 3)->nullable();
			$table->string('PBeds', 5)->nullable();
			$table->string('PBaths', 5)->nullable();
			$table->string('PLandBuilding', 20)->nullable();
			$table->string('PType', 100)->nullable();
			$table->string('PLastSoldAmt', 20)->nullable();
			$table->date('PLastSoldDate')->nullable();
			$table->string('PTotLandArea', 20)->nullable();
			$table->string('PTotBuildingArea', 20)->nullable();
			$table->string('PTotSQFootage', 20)->nullable();
			$table->string('PYearBuilt', 10)->nullable();
			$table->string('PAppraisedBuildingAmt', 20)->nullable();
			$table->string('PAppraisedLandAmt', 20)->nullable();
			$table->string('PTotAppraisedAmt', 20)->nullable();
			$table->integer('motive_type_id')->unsigned()->nullable();
			$table->integer('auctioneer_id')->unsigned()->nullable();
			$table->integer('proaddress_id')->unsigned()->nullable();
			$table->integer('PFilesUrlsId')->unsigned()->nullable()->index('PFilesUrlsId');
			$table->integer('PAuctioneerID')->unsigned()->nullable();
			$table->text('PComments', 65535)->nullable();
			$table->dateTime('PDateFiled')->nullable();
			$table->string('PListingID')->nullable();
			$table->integer('AAuctionID')->unsigned()->nullable();
			$table->integer('owner_id')->unsigned()->nullable();
			$table->integer('TTrusteeID')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property');
	}

}
