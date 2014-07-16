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
	        $table->integer('restaurant_id')->unsigned();
	        $table->integer('category_id')->unsigned();
	        $table->string('name', 255)->unique();
	        $table->string('description', 100);
	        $table->string('price', 255);
	        $table->string('aditional', 255);
	        $table->integer('state')->default(1);
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});

		DB::table('menus')->insert(array(
			'restaurant_id' => '1',
			'category_id' => '1',
			'name' => 'Arepa Chorrizo',
			'description' => 'con chorizo, pollo y queso.',
			'price' => '1200',
			'aditional' => '0',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('menus')->insert(array(
			'restaurant_id' => '1',
			'category_id' => '1',
			'name' => 'Arepa Choripollo',
			'description' => 'con chorizo, pollo y queso.',
			'price' => '1200',
			'aditional' => '0',
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
		Schema::dropIfExists('menus');
	}

}