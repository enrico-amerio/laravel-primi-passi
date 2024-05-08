<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $hello = 'Hello';
    $world = 'World';
    return view('home', compact('hello', 'world'));
})->name('home');
Route::get('/about', function () {
    $about = 'about';
    $me = 'me';
    return view('about', compact('about', 'me'));

})->name('about');
