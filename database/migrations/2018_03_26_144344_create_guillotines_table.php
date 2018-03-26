<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuillotinesTable extends Migration {

	public function up()
	{
		Schema::create('guillotines', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('max_width');
			$table->integer('max_depth');
			$table->integer('min_depth');
			$table->integer('max_stack_height');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('guillotines');
	}
}