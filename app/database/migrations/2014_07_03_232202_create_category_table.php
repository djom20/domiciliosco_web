<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function($table)
		{
			$table->increments('id');
	        $table->string('name', 100);
	        $table->integer('state')->default(1);
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});

		DB::table('category')->insert(array(
			'name' => 'Carnes',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('category')->insert(array(
			'name' => 'Comida China',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('category')->insert(array(
			'name' => 'Comida Rapida',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('category')->insert(array(
			'name' => 'Pizzeria',
			'created_at' => date('Y-m-d g:i:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('category');
	}

}