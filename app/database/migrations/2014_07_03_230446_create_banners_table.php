<?php

use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banners', function($table)
		{
			$table->increments('id');
	        $table->string('image', 255)->unique();
	        $table->string('link', 255);
	        $table->string('description', 100)->nullable();
	        $table->integer('state')->default(1);
	        $table->timestamps();
		});

		DB::table('banners')->insert(array(
			'image' => '0YJZVK9X4I56223YP6X5JM6SFMLT8E/logo.jpg',
			'link' => 'htpp://google.com',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('banners')->insert(array(
			'image' => '143PHX5DTJWDZE76ZB96VBSBM920TD/logo.jpg',
			'link' => 'htpp://google.com',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('banners')->insert(array(
			'image' => '4DC7JZZA84FDH59DST8FD8MY33P1YS/logo.jpg',
			'link' => 'htpp://google.com',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('banners')->insert(array(
			'image' => 'ABOPDBVCLQ62PTWIXGBDCIW0H2OSZG/logo.jpg',
			'link' => 'htpp://google.com',
			'created_at' => date('Y-m-d g:i:s')
		));

		DB::table('banners')->insert(array(
			'image' => 'BFJ3B6DMABQPDKP188GYCYYPTSDIF6/logo.jpg',
			'link' => 'htpp://google.com',
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
		Schema::dropIfExists('banners');
	}

}