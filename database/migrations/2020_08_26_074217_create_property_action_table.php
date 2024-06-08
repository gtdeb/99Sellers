<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_action', function(Blueprint $table)
		{
			$table->integer('property_id')->unsigned()->primary();
			$table->enum('pinned', ['no','yes']);
			$table->enum('downloadable', ['no','yes']);
			$table->enum('review', ['no','yes']);
			$table->integer('prop_img_id')->unsigned()->nullable();
			$table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_action');
	}

}
