<?php

use App\Http\Controllers\BuppinController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

Route::get('/', [SearchController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function (){

    //PippinControllerの管轄
    Route::resource('/buppin', BuppinController::class, ['only' => ['create', 'show', 'edit', 'delete', 'store', 'update']]);

    //TagControllerの管轄
    Route::resource('/tag', TagController::class, ['only' => ['index', 'store', "update", "destroy"]]);

    //UserControllerの管轄（とりあえずcreateもぶち込んでます）
    Route::resource('/user', UserController::class, ['only' => ['index', "update", "destroy"]]);

});
