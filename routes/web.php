<?php

use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Models\Page;
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

Route::get('/register', function () {
    $locations = Location::all();
    return view('welcome', compact('locations'));
})->name('register');

Route::get('/location/{id}', function ($id) {
    $location = Location::find($id);
    return view('location', compact('location'));
});

// home routes
Route::get('/', function () {
    return view('home');
})->name('home');

// about routes
Route::get('/about', function () {
    $pages = Page::where('id', 2)->get();
    return view('about', compact('pages'));
})->name('about');

// contact routes
Route::get('/contact', function () {
    $pages = Page::where('id', 3)->get();
    return view('contact', compact('pages'));
})->name('contact');

// faq routes
Route::get('/faq', function () {
    $pages = Page::where('id', 1)->get();
    return view('faq', compact('pages'));
})->name('faq');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
