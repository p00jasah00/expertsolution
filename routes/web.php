<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);
Route::post('/login_post', [FrontendController::class, 'login_post']);
Route::get('/register', [FrontendController::class, 'register']);
Route::post('/register_post', [FrontendController::class, 'register_post']);
Route::get('/logout', [FrontendController::class, 'logout'])->name('logout');


// admin
Route::get('/dashboard', [FrontendController::class, 'dashboard']);

// InventoryController
Route::get('/create_inventory', [InventoryController::class, 'inventory'])->name('inventory');
Route::Post('/inventory_store', [InventoryController::class, 'inventory_store'])->name('inventory_store');
Route::get('/edit_inventory/{inventory}/edit', [InventoryController::class, 'edit'])->name('edit_inventory');
Route::put('/update_inventory/{inventory}', [InventoryController::class, 'update'])->name('update_inventory');
Route::delete('/delete_inventory/{inventory}', [InventoryController::class, 'destroy'])->name('delete_inventory');

Route::get('/view_inventory', [InventoryController::class, 'view_inventory'])->name('view_inventory');
