<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\DCController as
DCController;
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

// Route::get('/', function () {
//     $comics = config("comics");
//     return view('pages.home',compact("comics"));
// })->name("homePage");



Route::get('/', [DCController::class, 'index'])->name('homePage');
Route::get('/games', [DCController::class, 'charsFun'])->name('CharactersPage');
