<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_categories', function(Blueprint $table)
		{
			$table->increments('category_id');
			$table->string('parent_category', 100);
			$table->string('parent_cat_slug', 100)->nullable();
			$table->text('parent_cat_description', 65535)->nullable();
			$table->string('child_category', 100);
			$table->string('child_cat_slug', 100)->nullable();
			$table->text('child_cat_description', 65535)->nullable();
			$table->unique(['parent_category','child_category'], 'parent_category_u');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_categories');
	}

}
