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

Route::get('/companies', 'CompaniesController@index');
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/create', 'CompaniesController@create');
Route::get('/companies/{companies}/edit', 'CompaniesController@edit');
Route::patch('/companies/{companies}', 'CompaniesController@update');
Route::delete('/companies/{companies}', 'CompaniesController@destroy');
Route::get('/companies/{companies}', 'CompaniesController@show');

Route::post('/employees', 'EmployeeController@store');
Route::get('/employees/{companies}/create', 'EmployeesController@create');
Route::delete('/employees/{employees}', 'EmployeesController@destroy');
Route::get('/employees/{employees}/edit', 'EmployeesController@edit');
Route::patch('/employees/{employees}', 'EmployeesController@update');
