<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeopleController;

Route::prefix('v1')->group(function (){
    Route::get('/people',[PeopleController::class,'index'])->name('people');
    Route::post('/people',[PeopleController::class,'store'])->name('people.store');
    Route::get('/people/{id}',[PeopleController::class,'show'])->name('people.show')->where('id', '[1-9]+');
    Route::put('/people/{id}',[PeopleController::class,'update'])->name('people.update')->where('id', '[1-9]+');
    Route::delete('/people/{id}',[PeopleController::class,'destroy'])->name('people.delete')->where('id', '[1-9]+');
});
