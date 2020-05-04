<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CarsUpdate2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cars1', function(Blueprint $table)
		{
			  /*$table->bigIncrements('id');
              $table->timestamps();
              $table->string('title');
              $table->string('description');
              $table->integer('price');
              $table->string('seller-phone-number');
              $table->string('location');
              $table->string('release');
              $table->integer('mileage');
              $table->integer('number_of_doors');
              $table->integer('number_of_seats');
              $table->string('color');
              $table->string('transsmission');
              $table->string('fiscal_power');
              $table->string('img1');
              $table->string('img2');
              $table->string('img3');
              $table->string('img4');
              $table->string('img5');
              $table->string('img6');
              $table->string('img7');
              $table->string('img8');
              $table->string('img9');
              $table->string('img10');
              //$table->foreign('id')->references('id')->on('users');*/
              $table->string('fuel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cars');
	}

}
