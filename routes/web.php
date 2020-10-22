<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatController;

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

Route::get('/', [CatController::class, 'index'])->name('index');

Route::get('/cats/{id}', [CatController::class, 'show'])->name('details');

Route::get('/test/', function() {
    // Get url parameter
    $name = request('name');
    return view('test', ['name' => $name]);
});
