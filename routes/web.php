<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EvaluatorController;
use App\http\Controllers\UsersController;
use App\http\Controllers\IngredientsController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{vue?}',function(){
    return view('welcome');
})->where('vue','[\/\w\.-]*');


Route::post('/logout','UsersController@logout');
Route::post('/get_all_branch','UsersController@get_all_branch');
Route::post('/user_login','UsersController@user_login');


Route::post('/get_all_ingredients','IngredientsController@get_all_ingredients');



