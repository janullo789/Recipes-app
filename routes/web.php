<?php

use App\Http\Controllers\FridgeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainSite', [RecipeController::class, 'mainSite'])->name('mainSite');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/fridge', [FridgeController::class, 'index'])->name('fridge.index');
    Route::post('/fridge', [FridgeController::class, 'store'])->name('fridge.store');


    Route::get('/ingredients', [IngredientController::class, 'index'])->name('ingredients.index');
    Route::get('/ingredients/create', [IngredientController::class, 'create'])->name('ingredients.create');
    Route::post('/ingredients', [IngredientController::class, 'store'])->name('ingredients.store');
    Route::get('/ingredients/edit/{ingredient}', [IngredientController::class, 'edit'])->name('ingredients.edit');
    Route::post('/ingredients/{ingredient}', [IngredientController::class, 'update'])->name('ingredients.update');
    Route::delete('/ingredients/{ingredient}', [IngredientController::class, 'destroy'])->name('ingredients.destroy');

    Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

    Route::get('/recipesAdmin', [RecipeController::class, 'indexAdmin'])->name('recipes.indexAdmin');
    Route::get('/recipesAdmin/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipesAdmin', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/recipesAdmin/edit/{recipe}', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::post('/recipesAdmin/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::delete('/recipesAdmin/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
});

require __DIR__.'/auth.php';
