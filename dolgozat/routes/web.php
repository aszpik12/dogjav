<?php

use App\Http\Controllers\BrandController;
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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    //Route::patch('api/brand', [BrandController::class, 'update'])->name('brand.update');
});

Route::get('/api/brandget', [BrandController::class, 'show']);
Route::get('/api/brandpost', [BrandController::class, 'store']);