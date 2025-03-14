<?php

use App\Livewire\Auth\DashboardComponent;
use App\Livewire\Auth\LoginComponent;
use App\Livewire\Auth\RegisterComponent;
use App\Livewire\Dashboard\Account\RechargeAccount;
use App\Livewire\Dashboard\Account\RecordAccount;
use App\Livewire\Dashboard\Account\WithdrawAccount;
use App\Livewire\Dashboard\Mine;
use App\Livewire\Dashboard\MyTeamComponent;
use App\Livewire\Dashboard\Transactions;
use App\Livewire\Dashboard\TransactionsList;
use Illuminate\Support\Facades\Route;

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');


Route::get('/', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('login');
Route::get('/home', DashboardComponent::class)->name('home');
Route::get('/myteam', MyTeamComponent::class)->name('myteam');
Route::get('/transactions', Transactions::class)->name('transactions');
Route::get('/transactions-list', TransactionsList::class)->name('transactions.list');
Route::get('/mine', Mine::class)->name('mine');
Route::get('/recharge', RechargeAccount::class)->name('recharge');
Route::get('/record-recharge', RecordAccount::class)->name('record.recharge');
Route::get('/withdrawl', WithdrawAccount::class)->name('withdrawl');


// require __DIR__ . '/auth.php';
