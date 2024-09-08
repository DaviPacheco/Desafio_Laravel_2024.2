<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\DepositWithdrawalController;
use App\Http\Controllers\PendingController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';

// Rotas para User
Route::resource('users', UserController::class);

// Rotas para Manager
Route::resource('managers', ManagerController::class);

// Rotas para Admin
Route::resource('admins', AdminController::class);

// Rotas para Account
Route::resource('accounts', AccountController::class);

// Rotas para Transaction
Route::resource('transactions', TransactionController::class);

// Rotas para Transfer
Route::resource('transfers', TransferController::class);

// Rotas para Loan
Route::resource('loans', LoanController::class);

// Rotas para Deposit/Withdrawal
Route::resource('deposits_withdrawals', DepositWithdrawalController::class);

// Rotas para Pending
Route::resource('pendings', PendingController::class);