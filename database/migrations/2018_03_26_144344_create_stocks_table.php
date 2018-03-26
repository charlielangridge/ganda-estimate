<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration {

	public function up()
	{
		Schema::create('stocks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('size_id')->unsigned();
			$table->integer('weight');
			$table->integer('cost_per_k');
			$table->integer('supplier_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('stocks');
	}
}