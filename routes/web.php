<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL; // Add this import for URL facade
use App\Http\Controllers\InventoryController;

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

// Add this at the beginning of your route definitions
if (env('APP_ENV') === 'production' || str_contains(request()->getHost(), 'github.dev')) {
    URL::forceScheme('https');
}

// The index page
Route::get('/', function () {
    return view('welcome');
});

// Simple hello route
Route::get('/hello/{name}', function($name) {
    return 'hi ' . $name;
});

// Define inventory routes directly without resource helper
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/inventory/{id}', [InventoryController::class, 'show'])->name('inventory.show');
Route::put('/inventory/{id}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.destroy');
