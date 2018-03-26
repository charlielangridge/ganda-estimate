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
			$table->integer('click_black');
			$table->integer('click_colour');
			$table->integer('weight_min');
			$table->integer('weight_max');
			$table->integer('grip_top');
			$table->integer('grip_bottom');
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