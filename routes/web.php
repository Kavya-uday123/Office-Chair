<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\ChairControllerlog;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\SearchChair;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\LogoutController;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/loginm', function () {
    return view('loginm');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/items', function () {
    return view('items');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/feature', function () {
    return view('feature');
});
Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/single-product', function () {
    return view('single-product');
});
Route::get('/tracking', function () {
    return view('tracking');
});
Route::get('/elements', function () {
    return view('elements');
});



Route::get('/admindex', function () {
    return view('admindex');
});
Route::get('/chairadd', function () {
    return view('chairadd');
});
Route::get('/chairedit', function () {
    return view('chairedit');
});
Route::get('/chairdelete', function () {
    return view('chairdelete');
});
// Route::get('/items', function () {
//     return view('items');
// });

Route::get('/payment', function () {
    return view('payment');
});



route::post('/auth/save',[ChairControllerlog::class,'save'])->name('auth.save');
Route::get('/auth/login', [ChairControllerlog::class,'login'])->name('auth.login'); 
route::post('/auth/check',[ChairControllerlog::class,'check'])->name('auth.check');
route::get('/auth/logout',[ChairControllerlog::class,'logout'])->name('auth.logout');


route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/admin/dashboard',[ChairControllerlog::class,'dashboard']);
    route::get('/auth/login',[ChairControllerlog::class,'login'])->name('auth.login');
    route::get('/auth/register',[ChairControllerlog::class,'register'])->name('auth.register');
});



Route::post('/login',[LoginController::class,'CustomerLog']); 
Route::post('/loginm',[LoginController::class,'AdminLog']); 

// Route::get('/CustomerHome',function(){
//     return view('CustomerHome');
// });
Route::get('/CustomerHome',[MyProfileController::class,'Profile']);

Route::get('/logout',[LoginController::class,'logout']);


Route::post('/chairadd',[ChairController::class,'InsertChair']);
Route::get('/chairview',[ChairController::class,'ViewChair']);
Route::get('/chairedit',[ChairController::class,'SelectChair']);
Route::post('/chairedit',[ChairController::class,'UpdateChair']);
Route::get('/chairedit/{id}',[ChairController::class,'DeleteChair']);

// Route::get('/chairsearch',[SearchChair::class,'ViewChair']);
Route::get('/CustomerHome',[SearchChair::class,'ViewChair']);
Route::get('/items',[SearchChair::class,'ViewItems']);

Route::get('/viewchairdetail/{id}',[SearchChair::class,'ViewChairDetail']);
Route::get('/CartInsert',[SearchChair::class,'CartInsert']);

Route::get('/cart',[CartController::class,'ViewCart']);
Route::get('/CartDelete',[CartController::class,'DeleteCart']);
Route::post('/cart',[CartController::class,'ChildInsert']);
Route::get('/checkout',[CartController::class,'ViewOrder']);
//Route::post('/checkout',[CartController::class,'UpdatePay']);
Route::post('/checkout',[OrderController::class,'InsertOrder']);


// Route::get('/confirmation',[OrderController::class,'ViewBill']);

 Route::get('/confirmation',[OrderController::class,'ViewOrderDetails']);

Route::get('/UsersReport',[UserReportController::class,'ViewUsers']);

Route::get('/CompletedOrders',[OrderController::class,'ViewAllOrderDetails']);

Route::get('/signup',[ChairControllerlog::class,'create'] );
Route::post('/signup',[ChairControllerlog::class,'store']);