<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
	    {
	        $table->increments('id');
	        $table->string('name', 50);
	        $table->string('username', 50);
	        $table->string('email', 300);
	        $table->string('password', 100);
	        $table->date('birthday', 100);
	        $table->boolean('gender');
	        $table->integer('height');
	        $table->integer('weight');
	        $table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
