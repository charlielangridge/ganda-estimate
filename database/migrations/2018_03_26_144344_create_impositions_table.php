<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImpositionsTable extends Migration {

	public function up()
	{
		Schema::create('impositions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('press_id')->unsigned();
			$table->integer('impose_type_id')->unsigned();
			$table->integer('finished_size_id')->unsigned();
			$table->integer('sheet_size_id')->unsigned();
			$table->boolean('duplex')->default(1);
			$table->enum('orientation', array('portrait', 'landscape'));
			$table->integer('rows');
			$table->integer('columns');
			$table->string('bleed_x');
			$table->integer('bleed_y');
			$table->integer('gutter');
			$table->boolean('marks')->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('impositions');
	}
}