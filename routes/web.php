<?php

use App\Http\Controllers\BorrowReturnEquipmentController;
use App\Http\Controllers\BrandItemController;
use App\Http\Controllers\HarddiskTypeItemController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\OperatingSystemItemController;
use App\Http\Controllers\ProjectTypeItemController;
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

/*Route::get('/', function () {
    return \Inertia\Inertia::render('App');
//    return view('welcome');
});*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::controller(ItemController::class)->group(function () {
    Route::get('/item-table', 'index')->name('items');
    Route::get('/create-item', 'create')->name('create-item');
    Route::post('/save-item', 'store')->name('save-item');
});

Route::get('/brand-table', [BrandItemController::class, 'index'])->name('brands');
Route::get('/harddisk-table', [HarddiskTypeItemController::class, 'index'])->name('harddisks');
Route::get('/item-type-table', [ItemTypeController::class, 'index'])->name('item-types');
Route::get('/operating-systems-table', [OperatingSystemItemController::class, 'index'])->name('operating-systems');
Route::get('/project-type-table', [ProjectTypeItemController::class, 'index'])->name('project-types');

Route::controller(BorrowReturnEquipmentController::class)->group(function (){
    Route::get('/form-borrow-equipment','create')->name('form-borrow-equipment');
});
