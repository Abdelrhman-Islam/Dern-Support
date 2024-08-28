<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HostController;
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

Route::get('/', [AppController::class, 'landing']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/user/index', [AppController::class, 'userIndex'])->name('user.index');

//////////// Tickets ////////////

Route::get('/ticket/create', [AppController::class, 'createTicket'])->name('ticket.create');

Route::get('/ticket/store', [AppController::class, 'storeTicket'])->name('ticket.store');

///////////// Q / A /////////////

Route::get('/qa', [AppController::class, 'qa'])->name('qa');

//////////// Admins /////////////

Route::get('/admins/index', [HostController::class, 'index'])->name('admin.index');

Route::put('/priority/create/{id}', [HostController::class, 'createPriority'])->name('priority.create');


//////////// Inventory /////////////

Route::get('/inventory', [HostController::class, 'invIndex'])->name('inventory.index');

Route::put('/inventory/{id}', [HostController::class, 'updateQty'])->name('inventory.update');



require __DIR__.'/auth.php';
