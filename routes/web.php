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
Route::view('/', 'welcome');

Route::prefix('admin')
->middleware('auth')
->group(function(){

    Route::view('/home','home');
    Route::resource("employes","EmployesController");
    Route::get("employes/{id}",[EmployesController::class,'show'])->name("employes.show");
    Route::post("employes",[EmployesController::class,'store'])->name("employes.store");
    Route::get("employes/edit/{id}",[EmployesController::class,'edit'])->name("employes.edit");
    Route::put("employes/update/{id}",[EmployesController::class,'update'])->name("employes.update");
    Route::delete("employes/{id}",[EmployesController::class,'destroy'])->name("employes.destroy");

});

// certification
Route::prefix("admin")
->middleware("auth")
->group(function(){
        //work and vacation certificate
        Route::get("employes/{id}/work_certifcate}",[EmployesController::class,'WorkCertificate'])->name("certificate.request");
        Route::get("employes/{id}/vacation_request",[EmployesController::class,'VacationRequest'])->name("vacation.request");   
    
});