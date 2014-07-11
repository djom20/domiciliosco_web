<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders_detail', function($table)
		{
			$table->increments('id');
	        $table->integer('order');
	        $table->integer('menu');
	        $table->integer('amount'); //cantidad
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
		Schema::dropIfExists('orders_detail');
	}

}