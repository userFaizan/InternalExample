<?php

use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuestionOptionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware as GuzzleHttpMiddleware;
use Illuminate\Routing\Controllers\Middleware;
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
    return view('auth.login');
});


Route::group(['Middleware' => ['auth']] ,function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');

    Route::post('/submit-form', [DashboardController::class, 'submitForm'])->name('submit-form');

});

// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() {


    Route::prefix('/user/')->as('user.')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::post('{id}/edit', [UserController::class, 'update'])->name('update');
        Route::get('{id}/delete', [UserController::class, 'delete'])->name('delete');
        Route::get('changeStatus', [UserController::class, 'changeStatus'])->name('changeStatus');

    });
    Route::prefix('/question/')->as('question.')->group(function () {

    Route::get('', [QuestionController::class, 'index'])->name('index');
    Route::get('/create', [QuestionController::class, 'create'])->name('create');
    Route::post('/store', [QuestionController::class, 'store'])->name('store');
    Route::get('{id}/edit', [QuestionController::class, 'edit'])->name('edit');
    Route::post('{id}/edit', [QuestionController::class, 'update'])->name('update');
    Route::get('{id}/delete', [QuestionController::class, 'delete'])->name('delete');

    });
    Route::prefix('/questionoption/')->as('questionoption.')->group(function () {

        Route::get('', [QuestionOptionController::class, 'index'])->name('index');
        Route::get('/create', [QuestionOptionController::class, 'create'])->name('create');
        Route::post('/store', [QuestionOptionController::class, 'store'])->name('store');
        Route::get('{id}/edit', [QuestionOptionController::class, 'edit'])->name('edit');
        Route::post('{id}/edit', [QuestionOptionController::class, 'update'])->name('update');
        Route::get('{id}/delete', [QuestionOptionController::class, 'delete'])->name('delete');

    });

});

require __DIR__.'/auth.php';
