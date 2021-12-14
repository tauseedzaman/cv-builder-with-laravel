<?php

use App\Http\Livewire\BuildCV;
use App\Http\Livewire\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\viewCv;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('index');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Route::get("/", viewCv::class)->name("leftSideBar");
    Route::get("/CV_Builder", BuildCV::class)->name("buildCV");
});
Route::get('test',Test::class);
// Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg')








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



