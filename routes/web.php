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

Auth::routes();

Route::get('/supervisor', 'SupervisorController@index');
Route::get('/cashier', 'CashierController@index');

//Supervisor Controller
Route::get('/supervisor/income', 'SupervisorController@getIncomePage');
Route::post('/supervisor/income', 'SupervisorController@storeIncome');
Route::put('/supervisor/income/{income}', 'SupervisorController@updateIncome');
Route::get('/supervisor/income/{income}/edit', 'SupervisorController@getIncomeEditPage');
Route::delete('/supervisor/income/{income}', 'SupervisorController@deleteIncome');
Route::get('/supervisor/income/create', 'SupervisorController@createIncomePage');

Route::get('/supervisor/expense', 'SupervisorController@getExpensePage');
Route::post('/supervisor/expense', 'SupervisorController@storeExpense');
Route::put('/supervisor/expense/{expense}', 'SupervisorController@updateExpense');
Route::get('/supervisor/expense/{expense}/edit', 'SupervisorController@getExpenseEditPage');
Route::delete('/supervisor/expense/{expense}', 'SupervisorController@deleteExpense');
Route::get('/supervisor/expense/create', 'SupervisorController@createExpensePage');
Route::get('/supervisor/profile', 'SupervisorController@getUserProfile');

//Cashier Controller
Route::get('/cashier/income', 'CashierController@getIncomePage');
Route::post('/cashier/income', 'CashierController@storeExpense');
Route::put('/cashier/income/{income}', 'CashierController@updateIncome');
Route::get('/cashier/income/{income}/edit', 'CashierController@getIncomeEditPage');
Route::get('/cashier/income/create', 'CashierController@createIncomePage');
Route::delete('/cashier/income/{income}', 'CashierController@deleteIncome');

Route::get('/cashier/expense', 'CashierController@getExpensePage');
Route::post('/cashier/expense', 'CashierController@storeExpense');
Route::put('/cashier/expense/{expense}', 'CashierController@updateExpense');
Route::get('/cashier/expense/{expense}/edit', 'CashierController@getExpenseEditPage');
Route::delete('/cashier/expense/{expense}', 'CashierController@deleteExpense');
Route::get('/cashier/expense/create', 'CashierController@createExpensePage');
Route::get('/cashier/profile', 'CashierController@getUserProfile');
