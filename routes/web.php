<?php

use Illuminate\Support\Facades\Route;
use App\Models\contact;
use App\Http\Controllers\contactController;

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
Route::get('/',function()
{
    return view('welcome');
});
Route::get('/services',function()
{
    return view('services');
});
Route::get('/about',function()
{
    return view('about');
});
Route::get('/contact/index',[contactController::class,'index'])->name('store_contact');
Route::post('/contact/storeinfo',[contactController::class,'storeinfo']);
Route::get('/contact/viewinfo',[contactController::class,'viewinfo']);
Route::get('/contact/delete/{id}',[contactController::class,'delete'])->name('delete_contact');
Route::get('/contact/edit/{id}',[contactController::class,'edit'])->name('edit_contact');
Route::post('/contact/update/{id}',[contactController::class,'update'])->name('update_contact');
