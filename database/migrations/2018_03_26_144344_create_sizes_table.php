<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSizesTable extends Migration {

	public function up()
	{
		Schema::create('sizes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('dim_x');
			$table->integer('dim_y');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('sizes');
	}
}