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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/about', function (){
    return view('about');
});

Route::get('/services', function (){
    return view('services');
});

Route::get('/projects', function (){
    return view('projects');
});

Route::get('/blog', function (){
    return view('blog');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/policy&privacy', function(){
    return view('policy&privacy');
});


Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
});
