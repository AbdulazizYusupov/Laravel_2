<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Middleware\Check;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['check'])->group(function () {
    //student
    Route::get('/student', [\App\Http\Controllers\StudentController::class, 'index'])->name('student');
    Route::get('/student-create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
    Route::post('/student-create', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
    Route::get('/student-edit{student}', [\App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
    Route::put('/student-update{student}', [\App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::get('/student-delete{id}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy');
    //post
    Route::get('/post', [\App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/post-create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/post-create', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    ROute::get('/post-edit{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::put('/post-update{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::get('/post-delete/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
    //car
    Route::get('/car', [\App\Http\Controllers\CarController::class, 'index'])->name('car');
    Route::get('/car-create', [\App\Http\Controllers\CarController::class, 'create'])->name('car.create');
    Route::post('/car-create', [\App\Http\Controllers\CarController::class, 'store'])->name('car.store');
    Route::get('/car-edit{car}', [\App\Http\Controllers\CarController::class, 'edit'])->name('car.edit');
    Route::put('/car-update{car}', [\App\Http\Controllers\CarController::class, 'update'])->name('car.update');
    Route::get('/car-delete/{id}', [\App\Http\Controllers\CarController::class, 'destroy'])->name('car.destroy');
    //role
    Route::get('/roles', [\App\Http\Controllers\RolesController::class, 'index'])->name('role');
    Route::get('/roles-create', [\App\Http\Controllers\RolesController::class, 'create'])->name('role.create');
    Route::post('/roles-create', [\App\Http\Controllers\RolesController::class, 'store'])->name('role.store');
    Route::get('/roles-edit/{role}', [\App\Http\Controllers\RolesController::class, 'edit'])->name('role.edit');
    Route::put('/roles/{role}', [\App\Http\Controllers\RolesController::class, 'update'])->name('role.update');
    Route::get('/roles-delete/{id}', [\App\Http\Controllers\RolesController::class, 'destroy'])->name('role.destroy');
    Route::post('/roles-active', [\App\Http\Controllers\RolesController::class, 'active'])->name('role.active');
    //users
    Route::get('/users', [\App\Http\Controllers\AuthController::class, 'index'])->name('user');
    Route::get('/users-create', [\App\Http\Controllers\AuthController::class, 'create'])->name('user.create');
    Route::post('/users-create', [\App\Http\Controllers\AuthController::class, 'store'])->name('user.store');
    Route::get('/users-edit/{user}', [\App\Http\Controllers\AuthController::class, 'edit'])->name('user.edit');
    Route::put('/users/{user}', [\App\Http\Controllers\AuthController::class, 'update'])->name('user.update');
    Route::get('/users-delete/{id}', [\App\Http\Controllers\AuthController::class, 'destroy'])->name('user.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
