<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserChefController;
use App\Http\Controllers\UserRecipeController;
use App\Http\Controllers\AddRecipeController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\RecipeController;
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
//Master Route
Route::resource('chef', ChefController::class);
Route::get('chef/{id}/chef_Recipe', [ChefController::class,'rec'])->name('chef.rec');
Route::resource('recipe', RecipeController::class);


//User Route
Route::get('/user', function () {
     return view('layout.master');
 });
 Route::resource('userchef', UserChefController::class);
// Route::get('Chef/{id?}', [UserChefController::class,'rec'])->name('userchef.rec');
 Route::resource('userrecipe', UserRecipeController::class);
Route::get('userchef/{id}/chef_Recipe', [UserRecipeController::class,'rec'])->name('userrecipe.rec');
Route::get('recipeadd',[AddRecipeController::class,'index']);


      

