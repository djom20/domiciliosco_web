<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdditionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additional', function($table)
		{
			$table->increments('id');
	        $table->string('name', 255)->unique();
	        $table->string('description', 255);
	        $table->integer('price');
	        $table->integer('menu');
	        $table->integer('restaurant');
	        $table->integer('state');
	        $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('additional');
	}

}