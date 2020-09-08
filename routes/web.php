<?php

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
    return redirect('login');
});

Route::GET('/login', 'LoginController@index');
Route::post('/login', 'LoginController@validation');
Route::get('/logout', 'LogoutController@index');

Route::middleware(['sess'])->group(function(){
    Route::get('/home', 'HomeController@index');

    //Route::middleware(['type'])->group(function(){

        Route::get('/home/createUser', 'HomeController@creation');
        Route::post('/home/createUser', 'HomeController@create');

        Route::get('/home/edit/{id}', 'HomeController@edit');
        Route::post('/home/edit/{id}', 'HomeController@update');
    
        Route::get('/home/delete/{id}', 'HomeController@delete');
        Route::post('/home/delete/{id}', 'HomeController@destroy');
    
        Route::get('/home/details/{id}', 'HomeController@details');




        Route::get('/employee/home', 'EmpController@index');
        Route::get('/employee/create', 'EmpController@create');
        Route::post('/employee/create', 'EmpController@store');
        Route::get('/employee/edit/{id}', 'EmpController@edit');
        Route::post('/employee/edit/{id}', 'EmpController@update');
        Route::get('/employee/delete/{id}', 'EmpController@delete');

        
        
    //});
    
});