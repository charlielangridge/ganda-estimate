<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('presses', function(Blueprint $table) {
			$table->foreign('print_method_id')->references('id')->on('print_methods')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('presses', function(Blueprint $table) {
			$table->foreign('size_min_id')->references('id')->on('sizes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('presses', function(Blueprint $table) {
			$table->foreign('size_max_id')->references('id')->on('sizes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('stocks', function(Blueprint $table) {
			$table->foreign('size_id')->references('id')->on('sizes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('stocks', function(Blueprint $table) {
			$table->foreign('supplier_id')->references('id')->on('suppliers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->foreign('press_id')->references('id')->on('presses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->foreign('impose_type_id')->references('id')->on('impose_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->foreign('finished_size_id')->references('id')->on('sizes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->foreign('sheet_size_id')->references('id')->on('sizes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->foreign('job_type_id')->references('id')->on('job_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->foreign('press_id')->references('id')->on('presses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->foreign('stock_id')->references('id')->on('stocks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->foreign('imposition_id')->references('id')->on('impositions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->foreign('guillotine_id')->references('id')->on('guillotines')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->foreign('packaging_id')->references('id')->on('packagings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('presses', function(Blueprint $table) {
			$table->dropForeign('presses_print_method_id_foreign');
		});
		Schema::table('presses', function(Blueprint $table) {
			$table->dropForeign('presses_size_min_id_foreign');
		});
		Schema::table('presses', function(Blueprint $table) {
			$table->dropForeign('presses_size_max_id_foreign');
		});
		Schema::table('stocks', function(Blueprint $table) {
			$table->dropForeign('stocks_size_id_foreign');
		});
		Schema::table('stocks', function(Blueprint $table) {
			$table->dropForeign('stocks_supplier_id_foreign');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->dropForeign('impositions_press_id_foreign');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->dropForeign('impositions_impose_type_id_foreign');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->dropForeign('impositions_finished_size_id_foreign');
		});
		Schema::table('impositions', function(Blueprint $table) {
			$table->dropForeign('impositions_sheet_size_id_foreign');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->dropForeign('quotes_job_type_id_foreign');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->dropForeign('quotes_press_id_foreign');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->dropForeign('quotes_stock_id_foreign');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->dropForeign('quotes_imposition_id_foreign');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->dropForeign('quotes_guillotine_id_foreign');
		});
		Schema::table('quotes', function(Blueprint $table) {
			$table->dropForeign('quotes_packaging_id_foreign');
		});
	}
}