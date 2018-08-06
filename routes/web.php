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

Route::post('/user/password/change', 'UserController@password')->name('user.password');
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/activity')->group(function(){
    Route::get('/reminder/{id}', 'ActivityController@reminder')->name('activity.reminder');
});


Route::resources([
    'activity' => 'ActivityController',
    'user' => 'UserController'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
