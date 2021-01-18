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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth']], function (){

    //BuppinControllerの管轄
    Route::resource('/', 'BuppinController', ['only' => ['create', 'show', "edit", "delete"]]);

    //TagControllerの管轄
    Route::resource('/tag', 'TagController', ['only' => ['create', 'show', "edit", "delete"]]);

    //UserControllerの管轄（とりあえずcreateもぶち込んでます）
    Route::resource('/user', 'UserController', ['only' => ['create', 'show', "edit", "delete"]]);

});
