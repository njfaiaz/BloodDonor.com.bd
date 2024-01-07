<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('admin/thana/ajax/{district_id}', [RegisterController::class, 'thana']);

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth'], 'namespace' => 'Admin'], function () {

    // ------------------------------ Admin Home Page----------------------------------
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');





    // Route::prefix('profile')->group(function () {
    //     Route::get('/', [SubcategoryController::class, 'index'])->name('subcategory');
    //     Route::get('create', [SubcategoryController::class, 'create'])->name('subcategory.create');
    //     Route::post('store', [SubcategoryController::class, 'store'])->name('subcategory.store');
    //     Route::get('{subcategory}/edit', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
    //     Route::post('update', [SubcategoryController::class, 'update'])->name('subcategory.update');
    //     Route::get('{subcategory}/delete', [SubcategoryController::class, 'delete'])->name('subcategory.delete');
    // });
});


//  =================================== User Route ======================================================

Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {

    // ------------------------------ Admin Home Page----------------------------------
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
