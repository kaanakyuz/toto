<?php

use App\Http\Controllers\CouponController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::apiResource('user', UserController::class );
 Route::post('/login', [LoginController::class, 'index'])->name('login');
 Route::post('/sms', [LoginController::class, 'smsControl'])->name('sms');
/*Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    return $request->user();
});*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('user', UserController::class);
    Route::get('/week', [WeekController::class, 'index'])->name('week');
    Route::post('/coupon-create', [CouponController::class, 'index'])->name('coupon-create');
    Route::get('/get-coupon', [CouponController::class, 'getCoupon'])->name('get-coupon');

    // More routes here

});
