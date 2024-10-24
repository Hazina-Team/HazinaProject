<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SheriaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SeraController;
use App\Http\Controllers\kanuniController;
use App\Http\Controllers\miongozoController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\userallController;









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


Route::get('auth/login', function () {
    return view('auth.login');
});
Route::get('/login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'PostReset']);






Route::group(['Middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    // Admin
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete']);
// sheria
    Route::get('admin/sheria', [SheriaController::class, 'list']);
    Route::get('admin/sheriaadd', [SheriaController::class, 'add']);
    Route::post('admin/sheriaadd', [SheriaController::class, 'insert']);
    Route::get(' admin/sheria/delete/{id}', [SheriaController::class, 'delete']);
   
// sera
Route::get('admin/sera', [SeraController::class, 'list']);
    Route::get('admin/seraaadd', [SeraController::class, 'add']);
    Route::post('admin/seraaadd', [SeraController::class, 'insert']);
    Route::get(' admin/sera/delete/{id}', [SeraController::class, 'delete']);

    // kanuni
    Route::get('admin/kanuni', [kanuniController::class, 'list']);
    Route::get('admin/kanuniaaadd', [kanuniController::class, 'add']);
    Route::post('admin/kanuniaaadd', [kanuniController::class, 'insert']);
    Route::get(' admin/kanuni/delete/{id}', [kanuniController::class, 'delete']);

    // miongozo
    Route::get('admin/miongozo', [miongozoController::class, 'list']);
    Route::get('admin/miongozoaaadd', [miongozoController::class, 'add']);
    Route::post('admin/miongozoaaadd', [miongozoController::class, 'insert']);
    Route::get(' admin/miongozo/delete/{id}', [miongozoController::class, 'delete']);

    // report
    Route::get('admin/report', [reportController::class, 'list']);
    Route::get('admin/reportaaadd', [reportController::class, 'add']);
    Route::post('admin/reportaaadd', [reportController::class, 'insert']);
    Route::get(' admin/report/delete/{id}', [reportController::class, 'delete']);
    });

    // user
    Route::get('user/sheria', [userallController::class, 'list']);
    Route::get('user/sera', [userallController::class, 'sera']);
    Route::get('user/kanuni', [userallController::class, 'kanuni']);
    Route::get('user/miongozo', [userallController::class, 'miongozo']);
    Route::get('user/report', [userallController::class, 'report']);
    Route::get('/', [userallController::class, 'dashboard']);
    Route::get('dashboard', [userallController::class, 'dashboard']);



