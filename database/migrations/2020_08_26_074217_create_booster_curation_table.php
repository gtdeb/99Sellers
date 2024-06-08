<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoosterCurationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booster_curation', function(Blueprint $table)
		{
			$table->increments('curation_id');
			$table->integer('booster_id')->unsigned();
			$table->string('flag_name', 50);
			$table->timestamp('flag_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->enum('resolve_status', ['assigned','pending','in-progress','resolved']);
			$table->dateTime('resolve_date')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booster_curation');
	}

}
