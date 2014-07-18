<?php

use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table){
			$table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::table('restaurants', function($table){
			$table->foreign('restaurants_category_id')->references('id')->on('restaurants_category')->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::table('orders_detail', function($table){
			$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::table('orders', function($table){
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::table('menus', function($table){
			$table->foreign('category_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::table('additional', function($table){
			$table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users')->dropForeign('users_rol_id_foreign');
		Schema::table('restaurants')->dropForeign('users_rol_id_foreign');
	}

}