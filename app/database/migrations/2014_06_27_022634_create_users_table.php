<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
	        $table->integer('rol_id')->unsigned();
	        $table->string('name', 255);
	        $table->string('email', 100)->unique();
	        $table->string('password', 100);
	        $table->integer('age')->nullable();
	        $table->string('sex', 10)->nullable();
	        $table->string('address', 100)->nullable();
	        $table->string('cellphone', 100)->nullable();
	        $table->string('recovery_passw', 50);
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});

		DB::table('users')->insert(array(
			'rol_id' => 1,
			'name' => 'Jonathan Olier',
			'email' => 'djom202@gmail.com',
			'password' => Hash::make('admin'),
			'age' => '25',
			'sex' => 'H',
			'address' => 'Calle 74 - # 70 -14',
			'cellphone' => '3014442072',
			'recovery_passw' => str_random(25),
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
		Schema::dropIfExists('users');
	}

}