<?php

use App\Http\Controllers\IdeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/idees', [IdeeController::class, 'index'])->name('ListeIdees');
Route::post('/addidea', [IdeeController::class, 'store'])->name('AjoutIdee');
Route::get('.deleteidea', [IdeeController::class, 'destroy'])->name('SupprimerIdee');
Route::put('updateidea', [IdeeController::class, 'update'])->name('ModifierIdee');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

