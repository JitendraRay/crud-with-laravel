<?php

use App\Http\Controllers\StudentController;
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
    return view('home');
});
Route::get('/student-list', [StudentController::class, 'getData'])->name("student.calling");
Route::get('/add-student', [StudentController::class, 'addData'])->name('student.add');
Route::get('/update-student/{id}', [StudentController::class, 'updateData'])->name('student.update');
Route::post('/save-data', [StudentController::class, 'saveData'])->name('student.store');
Route::post('/edit-student', [StudentController::class, 'editData'])->name('student.edit');
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('student.delete');