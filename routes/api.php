<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PlantCollection;
use App\Models\Plant;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/plants', function () {
    return new PlantCollection(Plant::all());
});

// Route::post('/plants/add', function () {
//     return new PlantCollection(Plant::all());
// });

// Route::post('/plants', '\App\Http\Controllers\PlantController@store');

Route::resource('/plants', '\App\Http\Controllers\PlantController');
