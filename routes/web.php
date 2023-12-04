<?php

use App\Http\Controllers\ConnexionController;
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
route::get('/',[ConnexionController::class,'index'])->name('connexion');
route::post('/store',[ConnexionController::class,'store']);
