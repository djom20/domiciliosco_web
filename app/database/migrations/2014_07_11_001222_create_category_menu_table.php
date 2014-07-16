<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoryMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus_category', function($table)
		{
			$table->increments('id');
	        $table->string('name', 100);
	        $table->integer('state')->default(1);
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});

		DB::table('menus_category')->insert(array(
			'name' => ucwords('desayunos'),
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('menus_category')->insert(array(
			'name' => ucwords('entradas'),
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('menus_category')->insert(array(
			'name' => ucwords('ensaladas'),
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('menus_category')->insert(array(
			'name' => ucwords('bebidas'),
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
		Schema::dropIfExists('menus_category');
	}

}