<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// home ---------------------------------------------------------------------------------------------------------------------------


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/add-deposit', [App\Http\Controllers\HomeController::class, 'addDeposit'])->name('home.addDeposit');
Route::post('/home/add-deposit', [App\Http\Controllers\HomeController::class, 'updateDeposit'])->name('home.addDeposit');

Route::get('/home/show-card-form', [App\Http\Controllers\HomeController::class, 'showCardForm'])->name('home.showCardForm');
Route::post('/home/save-card', [App\Http\Controllers\HomeController::class, 'saveCard'])->name('home.saveCard');
Route::get('/home/delete-card/{id}' , [App\Http\Controllers\HomeController::class, 'deleteCard'])->name('home.deleteCard');
Route::get('/home/edit-card-view/{id}', [App\Http\Controllers\HomeController::class, 'editCardView'])->name('home.editCardView');
Route::put('/home/update-card/{id}', [App\Http\Controllers\HomeController::class, 'updateCard'])->name('home.updateCard'); //dovrsi

Route::get('/home/buy-food/{id}' , [App\Http\Controllers\HomeController::class, 'buyFood'])->name('home.buyFood');

Route::get('/home/show-chef-form', [App\Http\Controllers\HomeController::class, 'chefForm'])->name('home.chefForm');
Route::post('/home/show-chef-form', [App\Http\Controllers\HomeController::class, 'saveChef'])->name('home.saveChef');



// Route::get('/home/add-to-cart/{id}', [App\Http\Controllers\HomeController::class, 'addToCart'])->name('home.addToCart');



// home ---------------------------------------------------------------------------------------------------------------------------



// about ---------------------------------------------------------------------------------------------------------------------------


Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/about/book-table', [App\Http\Controllers\AboutController::class, 'bookTable'])->name('about.bookTable');



// pages ---------------------------------------------------------------------------------------------------------------------------


Route::get('/category', [App\Http\Controllers\FoodMenuController::class, 'index'])->name('category');
Route::get('/category/buy-food/{id}' , [App\Http\Controllers\FoodMenuController::class, 'buyFood'])->name('category.buyFood');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/show-burgers', [App\Http\Controllers\CategoriesController::class, 'showBurgers'])->name('showBurgers');
Route::get('/categories/show-porridge', [App\Http\Controllers\CategoriesController::class, 'showPorridge'])->name('showPorridge');
Route::get('/categories/show-milk', [App\Http\Controllers\CategoriesController::class, 'showMilk'])->name('showMilk');
Route::get('/categories/show-chocolate', [App\Http\Controllers\CategoriesController::class, 'showChocolate'])->name('showChocolate');


// pages chefs


Route::get('/all-chefs', [App\Http\Controllers\HomeChefController::class, 'index'])->name('allChefs');
Route::get('/all-chefs/chef-single', [App\Http\Controllers\HomeChefController::class, 'chefSingle'])->name('chefSingle');
