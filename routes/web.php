<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LefSideBar;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('index');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get("/CV_Builder", LefSideBar::class)->name("leftSideBar");
});

// Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg')








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



