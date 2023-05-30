<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Category;
use App\Models\Page;
use App\Models\Teacher;
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
    $categories = Category::all();
    return view('welcome', compact('locations', 'categories'));
})->name('register');

Route::get('/location/{id}', function ($id) {
    $location = Location::find($id);
    return view('location', compact('location'));
});

// home routes
Route::get('/', function () {
    $teachers = Teacher::all();
    $locations = Location::all();
    $categories = Category::all();
    return view('home', compact('teachers', 'locations', 'categories'));

})->name('home');

Route::post('/search', function (Request $request) {
    $locations = Location::all();
    $categories = Category::all();
    $search = $request->input('search');
    $selectedCategory = $request->input('category');
    $selectedLocation = $request->input('location');
    
    $teachers = Teacher::query();

    if ($search) {
        $teachers->where(function ($query) use ($search) {
            $query->where('lastname', 'like', '%' . $search . '%')
                ->orWhere('firstname', 'like', '%' . $search . '%');
        });
    }

    if ($selectedCategory) {
        $teachers->where('category_id', $selectedCategory);
    }

    if ($selectedLocation) {
        $teachers->where('location_id', $selectedLocation);
    }
    
    $teachers = $teachers->get();

    return view('home', compact('teachers', 'locations', 'categories'));
})->name('search');



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
