<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('guillotine', 'GuillotineController');
Route::resource('packaging', 'PackagingController');
Route::resource('job_types', 'Job_typesController');
Route::resource('size', 'SizeController');
Route::resource('print_method', 'Print_methodController');
Route::resource('press', 'PressController');
Route::resource('stock', 'StockController');
Route::resource('supplier', 'SupplierController');
Route::resource('impose_type', 'Impose_typeController');
Route::resource('imposition', 'ImpositionController');
Route::resource('quote', 'QuoteController');

// Admin Routes
Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('guillotine', 'GuillotineCrudController');
    CRUD::resource('impose_type', 'Impose_typeCrudController');
    CRUD::resource('imposition', 'ImpositionCrudController');
    CRUD::resource('job_type', 'Job_typeCrudController');


    CRUD::resource('print_method', 'Print_methodCrudController');
    CRUD::resource('press', 'PressCrudController');

    CRUD::resource('size', 'SizeCrudController');

});