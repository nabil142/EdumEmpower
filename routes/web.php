<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Models\Admin;
use App\Models\CourseVideo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{course:slug}', [FrontController::class, 'details'])->name('front.details');
Route::get('/details/{category:slug}', [FrontController::class, 'details'])->name('front.category');


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

//Route::get('/', [FrontController::class, 'index'])->name('front.index');
//Route::get('/', [FrontController::class, 'index'])->name('front.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/learning/{course}/{courseVideoId}', [FrontController::class, 'learning'])->name('front.learning')->middleware('role:student|admin|owner');

    Route::prefix('superadmin')->name('superadmin.')->group(function () {
        Route::resource('categories', CategoryController::class)
        ->middleware('role:owner');
        
        Route::resource('admins', AdminController::class)
        ->middleware("role:owner");

        Route::resource('courses', CourseController::class)
        ->middleware('role:owner|admin');

        Route::get('/add/video/{course:id}', [CourseVideoController::class, 'create'])
        ->middleware('role:admin|owner')
        ->name('course.add_video');

        Route::post('/add/video/{course:id}', [CourseVideoController::class, 'store'])
        ->middleware('role:admin|owner')
        ->name('course.add_video.save');


        Route::resource('course_videos', CourseVideoController::class)
        ->middleware('role:owner|admin');


    }

);

});

require __DIR__.'/auth.php';
