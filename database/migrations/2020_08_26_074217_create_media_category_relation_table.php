<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaCategoryRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_category_relation', function(Blueprint $table)
		{
			$table->integer('media_id')->unsigned()->index('media_id_indx');
			$table->integer('category_id')->unsigned()->index('category_id_indx');
			$table->unique(['media_id','category_id'], 'media_id_u');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_category_relation');
	}

}
