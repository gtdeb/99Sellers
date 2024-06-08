<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPaymentInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_payment_info', function(Blueprint $table)
		{
			$table->increments('payment_id');
			$table->integer('registered_user_id')->unsigned();
			$table->integer('amount_paid')->unsigned();
			$table->enum('payment_status', ['success','fail','reversed']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_payment_info');
	}

}
