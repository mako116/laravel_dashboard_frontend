<?php

// routes/web.php

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/yourCollectibles', [DashboardController::class, 'yourCollectibles'])->name('yourCollectibles');
Route::get('/account', [DashboardController::class, 'account'])->name('account');
Route::get('/transfer-settings', [DashboardController::class, 'transferSettings'])->name('transfer-settings');
Route::get('/help', [DashboardController::class, 'help'])->name('help');

Route::get('/manage', function () {
    return view('manage');
});
// Route::get('/yourCollectibles', function () {
//     return view('yourCollectibles');
// });

