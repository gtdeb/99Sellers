<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoosterUserRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booster_user_relation', function(Blueprint $table)
		{
			$table->integer('booster_id')->unsigned();
			$table->string('user_id', 100)->comment('g_ for guest, a_ for agent, d_ for admin');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booster_user_relation');
	}

}
