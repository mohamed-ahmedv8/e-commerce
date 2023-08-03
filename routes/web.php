<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

route::get('/', [HomeController::class, 'index']);

route::get('redirect', [HomeController::class, 'redirect']);

route::get('allProducts', [HomeController::class, 'allProducts']);

// route::get('show/{id}', [HomeController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('is_admin', 'auth')->group(function () {
    Route::get('products', [AdminController::class, 'products']);
    // create
    Route::get('create', [AdminController::class, 'create']);
    Route::post('store', [AdminController::class, 'store']);
    // edit
    Route::get('editProduct/{id}', [AdminController::class, 'edit']);
    Route::put('updateProduct/{id}', [AdminController::class, 'update']);
    // delete
    Route::delete('deleteProduct/{id}', [AdminController::class, 'delete']);
    // search
    Route::get('search', [AdminController::class, 'search']);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
