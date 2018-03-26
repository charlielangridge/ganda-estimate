<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePressesTable extends Migration {

	public function up()
	{
		Schema::create('presses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('print_method_id')->unsigned();
			$table->integer('click_black')->unsigned();
			$table->integer('click_colour')->unsigned();
			$table->integer('weight_min')->unsigned();
			$table->integer('weight_max')->unsigned();
			$table->integer('grip_top')->unsigned();
			$table->integer('grip_bottom')->unsigned();
			$table->integer('size_min_id')->unsigned();
			$table->integer('size_max_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('presses');
	}
}