<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FebricsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\CuttingController;


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


Auth::routes(['register'=>false]);


Route::get('/home', 'HomeController@index')->name('home');

//Customer
Route::get('customer','CustomerController@Index');
Route::get('/customer/view/{id}','CustomerController@Show');
Route::get('/get/profile','CustomerController@GetProfile');
//Order


//User
Route::get('/user','UserController@create');
Route::get('/user/list','UserController@index');
Route::get('/user/delete/{id}','UserController@UserDelete');
Route::get('user/edit/{id}','UserController@UserEdit');
Route::post('/user/save','UserController@UserStore');
Route::post('user/update/{id}','UserController@UserUpdate');
Route::post('/password/change', 'UserController@changePassword')->name('password.change');
Route::get('user/show/{id}','UserController@Show');


// Febric route
    Route::group(['prefix' => '/febrics'], function(){
        Route::get('/', [ FebricsController::class, 'index'])->name('febrics');
        Route::get('/create', [ FebricsController::class, 'create'])->name('febric.create');
        Route::get('/edit/{id}', [ FebricsController::class, 'edit'])->name('febric.edit');
        Route::post('/store', [ FebricsController::class, 'store'])->name('febric.store');
        Route::post('/febric/edit/{id}', [ FebricsController::class, 'update'])->name('febric.update');
        Route::post('/febric/delete/{id}', [ FebricsController::class, 'delete'])->name('febric.delete');
    });

// supplier route
    Route::group(['prefix' => '/suppliers'], function(){
        Route::get('/', [ SuppliersController::class, 'index'])->name('suppliers');
        Route::get('/profile', [ SuppliersController::class, 'profile'])->name('supplier.profile');
        Route::get('/create', [ SuppliersController::class, 'create'])->name('supplier.create');
        Route::get('/edit/{id}', [ SuppliersController::class, 'edit'])->name('supplier.edit');
        Route::post('/store', [ SuppliersController::class, 'store'])->name('supplier.store');
        Route::post('/supplier/edit/{id}', [ SuppliersController::class, 'update'])->name('supplier.update');
        Route::post('/supplier/delete/{id}', [ SuppliersController::class, 'delete'])->name('supplier.delete');
    });

    // purchase route
    Route::group(['prefix' => '/purchases'], function(){
        Route::get('/new', [ PurchasesController::class, 'index'])->name('purchase.new');
        Route::post('/save', [ PurchasesController::class, 'save'])->name('purchase.add');
        
    });

    //cutting routes
    Route::group([ 'prefix' => 'cutting'], function(){
        Route::get('/new', [CuttingController::class, 'index'])->name('cutting.new');
        Route::post('/add', [CuttingController::class, 'add'])->name('cutting.add');
    });

      
