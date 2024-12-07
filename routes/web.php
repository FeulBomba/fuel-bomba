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

 Route::get('/', function () {return view('pages.wopa');});
Route::get('/woopa', function () {return view('pages.wopa');});
Route::get('/premuim', function () {return view('pages.premuim');});
Route::get('/leaderboard', function () {return view('pages.leaderboard');});
Route::get('/airdrop', function () {return view('pages.airdrop');});
Route::get('/about-us', function () {return view('pages.about');});

// Route::redirect('/public', '/');
