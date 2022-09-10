<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EvaluatorController;
use App\http\Controllers\UsersController;
use App\http\Controllers\IngredientsController;
use App\http\Controllers\IngredientsRequestController;
use App\http\Controllers\ProductionController;
use App\http\Controllers\InventoryProductionController;
use App\http\Controllers\BranchController;
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
Route::post('/get_all_branch','BranchController@get_all_branch');
Route::post('/get_branch_id','BranchController@get_branch_id');

Route::post('/user_login','UsersController@user_login');


Route::post('/get_all_ingredients','IngredientsController@get_all_ingredients');


Route::post('/send_request_form','IngredientsRequestController@send_request_form');
Route::post('/get_request_from_branch','IngredientsRequestController@get_request_from_branch');
Route::post('/get_only_current_branch_request','IngredientsRequestController@get_only_current_branch_request');
Route::post('/accept_request_ingredients','IngredientsRequestController@accept_request_ingredients');

Route::post('/get_all_production','ProductionController@get_all_production');

Route::post('/bread_in','InventoryProductionController@bread_in');
Route::post('/get_bread','InventoryProductionController@get_bread');
Route::post('/get_specific_production','InventoryProductionController@get_specific_production');
Route::post('/update_bread_out','InventoryProductionController@update_bread_out');



