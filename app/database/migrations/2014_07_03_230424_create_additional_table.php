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
	        $table->integer('menu_id')->unsigned();
	        $table->integer('restaurant_id')->unsigned();
	        $table->integer('state')->default(1);
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});

		DB::table('additional')->insert(array(
			'name' => 'Gaseosa Grande',
			'description' => 'Gaseosa 16 Onz',
			'price' => '12000',
			'menu_id' => '1',
			'restaurant_id' => '1',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('additional')->insert(array(
			'name' => 'Gaseosa Pequeña',
			'description' => 'Gaseosa 16 Onz',
			'price' => '8000',
			'menu_id' => '1',
			'restaurant_id' => '1',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('additional')->insert(array(
			'name' => 'Gaseosa Mediana',
			'description' => 'Gaseosa 16 Onz',
			'price' => '4000',
			'menu_id' => '1',
			'restaurant_id' => '1',
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
		Schema::dropIfExists('additional');
	}

}