<?php

use App\Http\Controllers\FridgeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopMapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecipeController::class, 'mainSite'])->name('mainSite');

Route::get('/shops/map', [ShopMapController::class, 'index'])->name('shop_map.index');

Route::middleware('auth')->group(function () {
    // All routes that require user to be authenticated
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/fridge', [FridgeController::class, 'index'])->name('fridge.index');
    Route::post('/fridge', [FridgeController::class, 'store'])->name('fridge.store');

    Route::get('/recipes/history', [RecipeController::class, 'history'])->name('recipes.history');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Routes for ingredients and recipes that require admin role
    Route::get('/ingredients', [IngredientController::class, 'index'])->name('ingredients.index');
    Route::get('/ingredients/create', [IngredientController::class, 'create'])->name('ingredients.create');
    Route::post('/ingredients', [IngredientController::class, 'store'])->name('ingredients.store');
    Route::get('/ingredients/edit/{ingredient}', [IngredientController::class, 'edit'])->name('ingredients.edit');
    Route::post('/ingredients/{ingredient}', [IngredientController::class, 'update'])->name('ingredients.update');
    Route::delete('/ingredients/{ingredient}', [IngredientController::class, 'destroy'])->name('ingredients.destroy');

    Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/recipes/edit/{recipe}', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::post('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');

    Route::resource('shops', ShopController::class)->except(['index']);
});

Route::get('/shops', [ShopController::class, 'index'])->middleware('auth')->name('shops.index');

Route::post('/recipes/{recipe}/execute', [RecipeController::class, 'executeRecipe'])->name('execute_recipe');

require __DIR__.'/auth.php';
