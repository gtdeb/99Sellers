<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRegisteredMembershipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_registered_membership', function(Blueprint $table)
		{
			$table->integer('registered_user_id')->unsigned()->primary();
			$table->integer('membership_id')->unsigned();
			$table->integer('payment_id')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_registered_membership');
	}

}
