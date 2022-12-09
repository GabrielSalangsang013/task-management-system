<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'formIndex']);
Route::get('/task/create', [TaskController::class, 'formCreateTaskPage']);
Route::get('/task/edit/{id}', [TaskController::class, 'formEditTaskPage']);
Route::get('/task/{id}', [TaskController::class, 'formTaskInfo']);
Route::get('/collab/create/{id}', [TaskController::class, 'formCreateCollabPage']);
Route::get('/contact', [TaskController::class, 'formContactPage']);
Route::get('/about', [TaskController::class, 'formAboutPage']);


Route::post('/task/create', [TaskController::class, 'createTask']);
Route::post('/task/delete/{id}', [TaskController::class, 'deleteTask']);
Route::patch('/task/edit/{id}', [TaskController::class, 'editTask']);

Route::post('/task/{id}/collab/create', [TaskController::class, 'createCollab']);
Route::post('/task/{taskid}/collab/delete/{collabid}', [TaskController::class, 'deleteCollab']);


