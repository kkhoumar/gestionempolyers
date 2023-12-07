<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\departementController;
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

//creation des routes dashboard
 //route::middleware('auth')->prefix('admin')->group(function(){

 //});

route::get('/dashboard',[dashboardController::class,'index']);

//depatement

route::get('/create',[departementController::class,'create'])->name('create.departement');
route::post('/store',[departementController::class,'store'])->name('store.departement');
