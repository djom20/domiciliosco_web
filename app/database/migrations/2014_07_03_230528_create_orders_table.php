<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function($table)
		{
			$table->increments('id');
	        $table->integer('user_id')->unsigned();
	        $table->integer('restaurant_id')->unsigned();
	        $table->string('description', 100);
	        $table->string('push_key', 100);
	        $table->string('address', 100);
	        $table->string('issue', 255);
	        $table->integer('state');
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('orders');
	}

}