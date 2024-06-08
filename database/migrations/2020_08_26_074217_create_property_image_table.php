<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_image', function(Blueprint $table)
		{
			$table->increments('prop_img_id');
			$table->text('location', 65535);
			$table->string('img_org_small')->nullable();
			$table->string('img_org_big', 200)->nullable();
			$table->string('img_prv1_small', 200)->nullable();
			$table->string('img_prv1_medium', 200)->nullable();
			$table->string('img_prv1_big', 200)->nullable();
			$table->string('img_prv2_small', 200)->nullable();
			$table->string('img_prv2_medium', 200)->nullable();
			$table->string('img_prv2_big')->nullable();
			$table->string('img_prv3_small', 200)->nullable();
			$table->string('img_prv3_medium', 200)->nullable();
			$table->string('img_prv3_big', 200)->nullable();
			$table->enum('used', ['no','yes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_image');
	}

}
