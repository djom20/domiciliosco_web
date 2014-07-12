<?php

use Illuminate\Database\Migrations\Migration;

class RenameCategoryTableToRestaurantsCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('category', 'restaurants_category');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('restaurants_category');
	}

}