<?php

use App\RoomType;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index')->name('adminhome');

Route::post('imageStore', 'RoomTypeController@imageStore')->name('room_type.imageStore');
Route::delete('imageDelete/{id}', 'RoomTypeController@imageDelete')->name('room_type.imageDelete');
Route::resource('/room_type','RoomTypeController');
