<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobTypesTable extends Migration {

	public function up()
	{
		Schema::create('job_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->boolean('booklet')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('job_types');
	}
}