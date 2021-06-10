<?php

use App\Http\Controllers\Api\Todo\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
    'namespace' => 'Todo',
    'as' => 'todo.'
    ]
    ,function(){
        Route::get('/todo/get', [TodoController::class, 'index'])->name('get');
        Route::post('/todo/create', [TodoController::class, 'create'])->name('create');
        Route::patch('/todo/{todo}/update', [TodoController::class, 'update'])->name('update');
        Route::delete('/todo/{todo}/delete', [TodoController::class, 'delete'])->name('delete');
    }
);
