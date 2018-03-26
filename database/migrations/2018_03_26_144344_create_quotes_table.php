<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotesTable extends Migration {

	public function up()
	{
		Schema::create('quotes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('qty1');
			$table->integer('qty2');
			$table->integer('qty3');
			$table->integer('q1_waste');
			$table->string('q2_waste');
			$table->integer('q3_waste');
			$table->integer('originals')->default('1');
			$table->integer('setup_mins');
			$table->integer('job_type_id')->unsigned();
			$table->integer('press_id')->unsigned();
			$table->boolean('colour')->default(1);
			$table->integer('stock_id')->unsigned();
			$table->integer('imposition_id')->unsigned();
			$table->integer('guillotine_id')->unsigned();
			$table->integer('packaging_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('quotes');
	}
}