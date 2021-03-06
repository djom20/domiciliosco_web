<?php

use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function($table)
		{
			$table->increments('id');
	        $table->string('name', 255)->unique();
	        $table->date('created_at');
	        $table->engine = 'InnoDB';
		});

		DB::table('roles')->insert(array(
			'name' => 'Administrator',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('roles')->insert(array(
			'name' => 'Central',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('roles')->insert(array(
			'name' => 'Restaurant',
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
		Schema::dropIfExists('roles');
	}

}