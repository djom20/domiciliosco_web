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
	        $table->integer('user');
	        $table->integer('restaurant');
	        $table->string('description', 100);
	        $table->string('push_key', 100);
	        $table->string('address', 100);
	        $table->string('issue', 255);
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
		Schema::dropIfExists('orders');
	}

}