<?php

use App\Company;
use Illuminate\Support\Facades\Route;

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
    return redirect('home');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/company', 'CompanyController');
Route::get('/company-data', function () {
    $companies = Company::all();
    return view('companies.datatables', compact('companies'));
})->name('company.datatables');

Route::get('/company-aggrid', function () {
    return view('companies.aggrid');
})->name('company.aggrid');

Route::resource('/employee', 'EmployeeController');
