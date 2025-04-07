<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Auth\DashboardComponent;
use App\Livewire\Auth\LoginComponent;
use App\Livewire\Auth\RegisterComponent;
use App\Livewire\Dashboard\Account\Exchange;
use App\Livewire\Dashboard\Account\RechargeAccount;
use App\Livewire\Dashboard\Account\RecordAccount;
use App\Livewire\Dashboard\Account\Setting;
use App\Livewire\Dashboard\Account\WithdrawAccount;
use App\Livewire\Dashboard\Mine;
use App\Livewire\Dashboard\MyTeamComponent;
use App\Livewire\Dashboard\Trade\TeamResult;
use App\Livewire\Dashboard\Trade\TradeResult;
use App\Livewire\Dashboard\Transactions;
use App\Livewire\Dashboard\TransactionsList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');


Route::middleware('auth')->group(function () {
    Route::get('/home', DashboardComponent::class)->name('home');
    Route::get('/myteam', MyTeamComponent::class)->name('myteam');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/transactions-list', TransactionsList::class)->name('transactions.list');
    Route::get('/mine', Mine::class)->name('mine');
    Route::get('/recharge', RechargeAccount::class)->name('recharge');
    Route::get('/record-recharge', RecordAccount::class)->name('record.recharge');
    Route::get('/withdrawl', WithdrawAccount::class)->name('withdrawl');
    Route::get('/exchange', Exchange::class)->name('exchange');
    Route::get('/setting', Setting::class)->name('setting');
    Route::get('/trade', TradeResult::class)->name('trade');
    Route::get('/team', TeamResult::class)->name('team');
    Route::view('reg', 'RegisterView');
});

Route::get('/', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');


Route::post('/user-register', [AuthController::class, 'RegisterView']);
Route::post('/user-login', [AuthController::class, 'LoginView']);
Route::post('/otpsend', [AuthController::class, 'otpSend']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

