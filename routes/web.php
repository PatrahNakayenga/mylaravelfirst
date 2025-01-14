<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ReportController;






Route::get('/', function () {
    return view('layout');
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



Route::resource('/students', Studentcontroller::class);
Route::resource('/teachers', Teachercontroller::class);
Route::resource('/courses', CourseController::class);
Route::resource('/batches', BatchController::class);
Route::resource('/enrollments', EnrollmentController::class);
Route::resource('/payments', PaymentController::class);
Route::get('report/report1/{pid}', [ReportController::class, 'report1']);
});

require __DIR__.'/auth.php';







