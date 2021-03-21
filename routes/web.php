<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API用ルーティング
|--------------------------------------------------------------------------
|
| API用のルーティングでJSONを返します．
|
*/

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
    Route::get('/getBoards', [BoardController::class, 'getBoards']);
});


/*
|--------------------------------------------------------------------------
| blade用ルーティング
|--------------------------------------------------------------------------
|
| 一般的なルーティングで，bladeを返します．
|
*/

Route::get('/', [SearchController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    //PippinControllerの管轄
    Route::resource('/buppin', BoardController::class, ['only' => ['create', 'show', 'edit', 'delete', 'store', 'update']]);
    //BuppinControllerの管轄
    Route::resource('/buppin', BoardController::class, ['only' => ['create', 'show', "edit", 'destroy', 'store']]);

    //TagControllerの管轄
    Route::resource('/tag', TagController::class, ['only' => ['index', 'store', "update", "destroy"]]);

    //UserControllerの管轄（とりあえずcreateもぶち込んでます）
    Route::resource('/user', UserController::class, ['only' => ['index', "update", "destroy"]]);
});


/*
|--------------------------------------------------------------------------
| react用ルーティング
|--------------------------------------------------------------------------
|
| 上記ルーティングに引っ掛からなかったものは，resources/js/index.js内でルーティングさせます．
|
*/

Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');
