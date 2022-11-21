<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\People\Http\Controllers\PeopleAPIController;

Route::prefix('v1')->group(function (){
    Route::get('/people',[PeopleAPIController::class,'index'])->name('people');
    Route::post('/people',[PeopleAPIController::class,'store'])->name('people.store');
    Route::get('/people/{id}',[PeopleAPIController::class,'show'])->name('people.show')->where('id', '[1-9]+');
    Route::put('/people/{id}',[PeopleAPIController::class,'update'])->name('people.update')->where('id', '[1-9]+');
    Route::delete('/people/{id}',[PeopleAPIController::class,'destroy'])->name('people.delete')->where('id', '[1-9]+');
});
