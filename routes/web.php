<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use OpenApi\Generator;
use OpenApi\scan;


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


Route::get('/dashboard', 'App\Http\Controllers\WorkerController@Myview')->name('dashboard');



Route::get('/api/documentation', function () {
    $openapi = Generator::scan([app_path('Http/Controllers')]);
    return response()->json($openapi);
});
Route::get('/api/docs', function () {
    return view('swagger');
});

require __DIR__.'/auth.php';

