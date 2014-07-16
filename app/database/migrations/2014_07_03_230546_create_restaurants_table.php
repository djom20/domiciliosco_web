<?php

use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurants', function($table)
		{
			$table->increments('id');
	        $table->string('name', 100);
	        $table->string('description', 100)->nullable();
	        $table->integer('restaurants_category_id')->unsigned();
	        $table->integer('user')->nullable();
	        $table->string('image')->nullable();
	        $table->string('email')->nullable();
	        $table->string('address')->nullable();
	        $table->string('lng')->nullable();
	        $table->string('lat')->nullable();
	        $table->integer('send_to_central')->default(1);


	        $table->integer('monday_open');
	        $table->integer('monday_closed');

	        $table->integer('tuesday_open');
	        $table->integer('tuesday_closed');

	        $table->integer('wednesday_open');
	        $table->integer('wednesday_closed');

	        $table->integer('thursday_open');
	        $table->integer('thursday_closed');

	        $table->integer('friday_open');
	        $table->integer('friday_closed');

	        $table->integer('saturday_open');
	        $table->integer('saturday_closed');

	        $table->integer('sunday_open');
	        $table->integer('sunday_closed');

	        $table->integer('state')->default(1);
	        $table->timestamps();
	        $table->engine = 'InnoDB';
		});

		DB::table('restaurants')->insert(array(
			'name' => 'Mr.Chuzz',
			'description' => 'Comida Rapida',
			'restaurants_category_id' => 1,
			'image' => 'mr_chuzz/logo.jpg',
			'lng' => '10.997827',
			'lat' => '-74.803301',

			'monday_open' => '18',
			'monday_closed' => '22',
			'tuesday_open' => '18',
			'tuesday_closed' => '22',
			'wednesday_open' => '18',
			'wednesday_closed' => '22',
			'thursday_open' => '18',
			'thursday_closed' => '22',
			'friday_open' => '18',
			'friday_closed' => '22',
			'saturday_open' => '18',
			'saturday_closed' => '22',
			'sunday_open' => '18',
			'sunday_closed' => '22',
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
		Schema::dropIfExists('restaurants');
	}

}