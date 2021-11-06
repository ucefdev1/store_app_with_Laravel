<?php

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

Route::get('/dd', function () {
    dd(Storage::url('file.jpg'));
});

//Route::get('/mail', function () {
  //  \Illuminate\Support\Facades\Mail::to('contact.ucefdev@gmail.com')->send(new \App\Mail\orderMail());
   //return new \App\Mail\orderMail();
//});

Route::get('/settings', function () {
       return view('settings');
})->name('settings');




Route::get('/',[\App\Http\Controllers\LoginController::class,'home'])->name('home');

Route::get('/logout',[\App\Http\Controllers\LogoutController::class,'logout'])->name('logout');


Route::post('/',[\App\Http\Controllers\LoginController::class,'login'])->name('login');

Route::get('/addUser',[\App\Http\Controllers\RegisterController::class,'addUser']);

Route::get('/addProduct',[\App\Http\Controllers\productController::class,'addProduct'])->name('addProduct');

Route::post('/addProduct',[\App\Http\Controllers\productController::class,'store'])->name('addProduct.Post');


Route::post('/addUser',[\App\Http\Controllers\RegisterController::class,'storeUser'])->name('addUser');

Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');

Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('users');
//colors
Route::get('/colors',[\App\Http\Controllers\colorController::class,'index'])->name('colors');
Route::get('/addColor',[\App\Http\Controllers\colorController::class,'addColorPage'])->name('addColorPage');
Route::get('/colors/delete/{id}',[\App\Http\Controllers\colorController::class,'destroy'])->name('colors.destroy');
Route::post('/addColor',[\App\Http\Controllers\colorController::class,'storeColor'])->name('addColor');




Route::get('/products',[\App\Http\Controllers\productController::class,'index'])->name('products');
Route::get('/products/delete/{Product}',[\App\Http\Controllers\productController::class,'destroy'])->name('products.destroy');
Route::get('/products/edit/{Product}',[\App\Http\Controllers\productController::class,'edit'])->name('products.edit');
Route::get('/products/edit/{Image:id}/delete',[\App\Http\Controllers\productController::class,'destroy_image'])->name('products.edit.destroy.image');
Route::get('/products/edit/clr/{Color:id}/delete',[\App\Http\Controllers\productController::class,'destroy_color'])->name('products.edit.destroy.color');

Route::post('/products/edit/{Product:id}/update',[\App\Http\Controllers\productController::class,'update'])->name('products.update');


Route::get('/product/{id}',[\App\Http\Controllers\sellerController::class,'index'])->name('sellPage');



Route::delete('/destroy/{user}',[\App\Http\Controllers\UserController::class,'destroy'])->name('destroy');


Route::post('/order/{product}',[\App\Http\Controllers\orderController::class,'order'])->name('order');


Route::get('/orders',[\App\Http\Controllers\orderXontroller::class,'orders'])->name('orders');

Route::get('/orders/{order}',[\App\Http\Controllers\orderXontroller::class,'ship'])->name('makeShip');

Route::get('/orders/delete/{order}',[\App\Http\Controllers\orderXontroller::class,'deleteOrder'])->name('deleteOrder');








