<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\SearchController;
use App\Mail\NewMailer;
use App\Mail\OrderCompleted;
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


Route::get('mail', function (){
   Mail::to(['qwery@gmail.com'])
       ->send(new OrderCompleted('Hello, qwery!'));
});

Route::post('test_mail', function (){
    Mail::to('test_mail@gmail.com')
        ->send(new NewMailer($text));
});


Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
    return $request->user();
});
