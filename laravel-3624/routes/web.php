<?php

use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'index']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/{userId}/edit', [UserController::class, 'edit']);
Route::put('/{userId}/update', [UserController::class, 'update']);
Route::delete('/{userId}/delete', [UserController::class, 'remove']);
Route::get('/{userId}/details', [UserController::class, 'details']);
Route::get('/{userId}/projects', [UserController::class, 'projectshow'])->name('projectshow');
Route::get('/{userId}/createprojects', [UserController::class, 'createprojects'])->name('create_project');
Route::post('/{userId}/storeprojects', [UserController::class, 'storeprojects']);
Route::get('/{projectId}/editprojects', [UserController::class, 'editprojects']);
Route::put('/{projectId}/updateprojects', [UserController::class, 'updateprojects']);
// Route::delete('/{projectId}/delete', [UserController::class, 'destroyprojects']);
Route::post('/{projectId}/delete', [UserController::class, 'destroyprojects']);
