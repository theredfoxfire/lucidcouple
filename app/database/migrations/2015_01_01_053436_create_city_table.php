<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
	    {
	        $table->increments('city_id');
	        $table->string('city_name', 50);
	        $table->string('city_desc', 50);
	        $table->integer('prov_id')->unsigned();
			$table->foreign('prov_id')->references('prove_id')->on('province');
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
		//
	}

}
