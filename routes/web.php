<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/', function () {
    return view('app');
})
->name('application');


// Route::get('/', [HomeController::class, 'dashboard']); 

Route::get('departments/index', [DepartmentController::class, 'index']) ->name('departmentsIndex');


Route::get('departments/create', [DepartmentController::class, 'create']) ->name('departmentsCreate');
Route::post('departments/store', [DepartmentController::class, 'store']) ->name('departmentsStore');


Route::post('departments/delete/{department}', [DepartmentController::class, 'delete']) ->name('departmentsDelete');


Route::get('departments/edit/{id}', [DepartmentController::class, 'edit']) ->name('departmentsEdit');
Route::post('departments/update/{department}', [DepartmentController::class, 'update']) ->name('departmentsUpdate');


Route::get('departments/test', [DepartmentController::class, 'test']) ;






Route::get('users/index', [UserController::class, 'index']) -> name ('usersIndex');
//dewd


// Route::get('deparments/index', function () {
//     return view('managment.departments.index');
// })->name('deparmentsIndex');

// Route::get('users/index', function(){
// return view ('managment.users.index');
// })-> name ('usersIndex');
