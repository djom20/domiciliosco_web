<?php

use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function($table)
		{
			$table->increments('id');
	        $table->integer('restaurante');
	        $table->integer('category');
	        $table->string('name', 255)->unique();
	        $table->string('description', 100);
	        $table->string('price', 255);
	        $table->string('aditional', 255);
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
		Schema::dropIfExists('menus');
	}

}