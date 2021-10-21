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
   Mail::to(['qwery@gmail.com'])->send(new OrderCompleted('Hello, qwery!'));
});

Route::post('test_mail/{out}/{text}/{inc}', function ($out, $text, $inc){
    Mail::to(["$inc"])->send(new NewMailer($out, $text));
});




Route::get('ololo', SearchController::class)->name('api_search');

Route::get('bank', function (){
    $client = new GuzzleHttp\Client();
    $response = $client->request('GET', 'https://www.nbrb.by/api/exrates/currencies');
    $cur = $response->getBody()->getContents();
    dd (json_decode($cur));
});
Route::apiResource('brands', BrandController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
