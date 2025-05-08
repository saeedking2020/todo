<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class,'index'])->name('home');
Route::get('/create_task',[TodoController::class,'create']);
Route::post('/create_task',[TodoController::class,'create_task'])->name('create_task');
Route::get('/categories',[TodoController::class,'categories'])->name('categories');
Route::post('/delete_task',[TodoController::class,'delete_task'])->name('delete_task');

Route::get('/edit_task/{id}',[TodoController::class,'edit'])->name('edit');
Route::put('/edit_task',[TodoController::class,'edit_task'])->name('edit_task');

Route::get('categories',[CategoryController::class,'index'])->name('categories');
Route::get('/create_category',[CategoryController::class,'create']);
Route::post('/create_category',[CategoryController::class,'create_category'])->name('create_category');

Route::delete('/delete_category/{category}',[CategoryController::class,'delete_category'])->name('delete_category');

Route::get('/edit_category/{category}',[CategoryController::class,'edit'])->name('edit_cat');
Route::put('/edit_category/{category}',[CategoryController::class,'edit_category'])->name('edit_category');

Route::get('/about',function (){
   return view('about');
})->name('about');
