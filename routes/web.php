<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

//UserAccess//Home
Route::get('/user/home', [UserController::class, 'index'])->name('user.home')->middleware('UserAccess');


//BranchAccess//Home
Route::get('/branch/home', [BranchController::class, 'index'])->name('branch.home')->middleware('BranchAccess');
Route::post('/branch/editBioData/{branchEmployee}', [BranchController::class, 'editBranchEmployee'])->name('branch.editBioData')->middleware('BranchAccess');
Route::put('/branch/editImage/{branchEmployee}', [BranchController::class, 'editBranchEmployeeImage'])->name('branch.editImage')->middleware('BranchAccess');
Route::post('/branch/defaultImage/{branchEmployee}', [BranchController::class, 'editBranchEmployeeImageDefult'])->name('branch.defaultImage')->middleware('BranchAccess');
Route::post('/branch/editBranch/{branch}', [BranchController::class, 'editBranch'])->name('branch.editBranch')->middleware('BranchAccess');

//BranchAccess//Categories
Route::get('/branch/categories', [BranchController::class, 'showCategories'])->name('branch.category')->middleware('BranchAccess');
Route::post('/branch/categories/addUnit', [BranchController::class, 'addUnit'])->name('branch.addUnit')->middleware('BranchAccess');
Route::delete('/branch/categories/DeleteUnit/{unit}', [BranchController::class, 'deleteUnit'])->name('branch.deleteUnit')->middleware('BranchAccess');
Route::post('/branch/categories/changePrivateKeyUnit/{unit}', [BranchController::class, 'changePrivateKeyUnit'])->name('branch.changePrivateKeyUnit')->middleware('BranchAccess');
Route::get('/branch/order/detailsU/{unit}', [BranchController::class, 'branchOrderDetailsU'])->name('branch.orderDetailsU')->middleware('BranchAccess');

// //BranchAccess//Delivery&drivers
Route::get('/branch/delivery', [BranchController::class, 'adminDelivery'])->name('branch.delivery')->middleware('BranchAccess');
// Route::post('/admin/editBioData/driver/{driver}', [BranchController::class, 'editDriver'])->name('admin.editBioDataDriver')->middleware('BranchAccess');
// Route::put('/admin/editImage/driver/{driver}', [BranchController::class, 'editDriverImage'])->name('admin.editImageDriver')->middleware('BranchAccess');
// Route::post('/admin/defaultImage/driver/{driver}', [BranchController::class, 'editDriverImageDefult'])->name('admin.defaultImageDriver')->middleware('BranchAccess');
// Route::post('/admin/driver/addDriver', [BranchController::class, 'addDriver'])->name('admin.addDriver')->middleware('BranchAccess');
// Route::delete('/admin/driver/deleteDriver/{driver}', [BranchController::class, 'deleteDriver'])->name('admin.deleteDriver')->middleware('BranchAccess');
// Route::post('/admin/driver/addSchedule', [BranchController::class, 'addSchedule'])->name('admin.addSchedule')->middleware('BranchAccess');
// Route::post('/admin/driver/changeScheduleStatus/{schedule}', [BranchController::class, 'changeScheduleStatus'])->name('admin.changeScheduleStatus')->middleware('BranchAccess');
// Route::delete('/admin/driver/deleteSchedule/{schedule}', [BranchController::class, 'deleteSchedule'])->name('admin.deleteSchedule')->middleware('BranchAccess');
// Route::post('/admin/driver/editSchedule/{schedule}', [BranchController::class, 'editSchedule'])->name('admin.editSchedule')->middleware('BranchAccess');

// //BranchAccess//Orders&Users
Route::get('/branch/orders', [BranchController::class, 'branchOrders'])->name('branch.orders')->middleware('BranchAccess');
Route::delete('/branch/driver/deleteOrder/{order}', [BranchController::class, 'deleteOrder'])->name('branch.deleteOrder')->middleware('BranchAccess');
Route::post('/branch/driver/extendOrder/{order}', [BranchController::class, 'extendOrder'])->name('branch.extendOrder')->middleware('BranchAccess');
Route::post('/branch/editBioData/user/{user}', [BranchController::class, 'editUser'])->name('branch.editBioDataUser')->middleware('BranchAccess');
Route::put('/branch/editImage/user/{user}', [BranchController::class, 'editUserImage'])->name('branch.editImageUser')->middleware('BranchAccess');
Route::post('/branch/defaultImage/user/{user}', [BranchController::class, 'editUserImageDefultCustomer'])->name('branch.defaultImageUser')->middleware('BranchAccess');
Route::post('/branch/user/addUser', [BranchController::class, 'addUser'])->name('branch.addUser')->middleware('BranchAccess');
Route::delete('/branch/user/deleteUser/{user}', [BranchController::class, 'deleteUser'])->name('branch.deleteUser')->middleware('BranchAccess');
Route::post('/branch/user/addOrder', [BranchController::class, 'addOrder'])->name('branch.addOrder')->middleware('BranchAccess');
Route::get('/branch/order/details/{order}', [BranchController::class, 'adminOrderDetails'])->name('branch.orderDetails')->middleware('BranchAccess');
Route::post('/branch/driver/changeOrderStatus/{order}', [BranchController::class, 'changeOrderStatus'])->name('branch.changeOrderStatus')->middleware('BranchAccess');

Auth::routes();

