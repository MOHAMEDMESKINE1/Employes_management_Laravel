<?php

use App\Http\Controllers\EmployesController;
use Illuminate\Support\Facades\Route;
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
Route::view('/', 'welcome' );

Route::get('admin/employes/statistiques', [EmployesController::class , 'statistiques' ])->name('employes.statistiques')->middleware(['auth']);
Route::resource("admin/employes","EmployesController")->middleware('auth');

Route::prefix('admin/employes')
->name('employes.')
->middleware('auth')
->group(function(){

    Route::view('/home','home');
 
    Route::get("/{id}", [EmployesController::class,'show' ])->name("show");
    Route::post("/", [EmployesController::class,'store' ])->name("store");
    Route::get("edit/{id}", [EmployesController::class,'edit' ])->name("edit");
    Route::put("/update/{id}", [EmployesController::class,'update' ])->name("update");
    Route::delete("/{id}", [EmployesController::class,'destroy' ])->name("destroy");

});

// certification
Route::prefix("admin/employes")
->middleware("auth")
->group(function(){
        //work and vacation certificate
        Route::get("/{id}/work_certifcate}", [EmployesController::class,'WorkCertificate'])->name("certificate.request");
        Route::get("/{id}/vacation_request", [EmployesController::class,'VacationRequest'])->name("vacation.request");   
    
});