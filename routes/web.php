<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotmanController;

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

Route::post('/botman', function () {
    // return view('welcome');
    app('botman')->listen();
});

Route::match(['get', 'post'], '/botman', [BotmanController::class,"chatbot"]);
// Route::get('/chatbot',[BotmanController::class,'chatbot']);

// Route::post('/post_chatbot',[BotmanController::class,'post_chatbot']);
