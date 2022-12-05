<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/customer_dashboard', function () {
//     return view('customer_dashboard');
// });
// Route::get('/downline_agent_dashboard', function () {
//     return view('downline_agent_dashboard');
// });
// Route::get('/employee_dashboard', function () {
//     return view('employee_dashboard');
// });
// Route::get('/in_house_agent_dashboard', function () {
//     return view('in_house_agent_dashboard');
// });
// Route::get('/referral_agent_dashboard', function () {
//     return view('referral_agent_dashboard');
// });



Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@redirection')->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
