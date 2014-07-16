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
	        $table->integer('order_id')->unsigned();
	        $table->integer('menu_id')->unsigned();
	        $table->integer('amount'); //cantidad
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
		Schema::dropIfExists('orders_detail');
	}

}