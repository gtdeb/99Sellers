<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGatewayInfoPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gateway_info_payment', function(Blueprint $table)
		{
			$table->increments('gateway_info_id');
			$table->string('gateway_SP_name');
			$table->text('gateway_url', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gateway_info_payment');
	}

}
