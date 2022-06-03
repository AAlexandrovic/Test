<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\ForgotPasswordController;

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
//    Storage::get();
    return view('index');

});
//Route::get('/UserSelect', function () {
//    return view('UserSelect');
//});

Route::get('/otherInfo', function () {
//    Storage::get();
    return view('otherInfo');

});

Route::post('/otherInfo', [\App\Http\Controllers\otherInfoController::class, 'otherUpload'])->name('other.upload');

//Route::get(
//Route::get('/productInfo', function () {
////    Storage::get();
//    return view('productInfo');
//
//});


Route::post('/productInfo', [\App\Http\Controllers\productInfoController::class, 'viewInfo'])->name('product.info');
Route::get('/productInfo',function (){
    return view('productInfo');
})->name('productInfo');



Route::get('/', [\App\Http\Controllers\ViewBoatsController::class,'ViewBoatsIndex']);


Route::post('/', [\App\Http\Controllers\basketController::class, 'basket'])->name('basket.upload');
//
//Route::view('/bage', 'bage');

Route::post('/Sell', [\App\Http\Controllers\sellController::class, 'Sell'])->name('sell');

Route::get('/bage', [\App\Http\Controllers\ViewBoatUserController::class,'ViewBoatsUser'])->name('bage');



Route::post('/UserSelect', [\App\Http\Controllers\basketboughtsController::class, 'bought'])->name('user.select');

Route::get('/UserSelect',function (){
    return view('UserSelect');
})->name('UserSelect');


Route::post('/final', [\App\Http\Controllers\finalSellController::class, 'final'])->name('final.controller');



Route::get('/basketBuy', [\App\Http\Controllers\basketBuyController::class, 'buyController'])->name('basketBuy');


Route::post('/bage', [\App\Http\Controllers\DeleteController::class, 'delete'])->name('bage.delete');

Route::get('/UpdateProduct', function () {
    return view('UpdateProduct');
});

Route::post('/update', [\App\Http\Controllers\UpdateProductController::class, 'productUpdate'])->name('image.update');

Route::get('/default', function () {
    return view('default');
});
Route::post('/image/upload', [\App\Http\Controllers\ImageController::class, 'upload'])->name('image.upload');

Route::name('user.')->group(function (){
    Route::view('/IndexUser', 'IndexUser')->middleware('auth')->name('IndexUser');




    Route::get('/login', function (){
        if(Auth::check()){

            return redirect()->route('user.IndexUser');

        }
        return view('login');
    })->name('login');

    Route::get('index',function (){
        Auth::check();
        return redirect('/');
    })->name('index');


//
//    Route::get('/bage', [\App\Http\Controllers\ViewBoatUserController::class, 'ViewBoatsUser']);

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);


//    Route::get('logout',function (){
//        Auth::logout();
//        return redirect('/');
//    })->name('logout');
//
    Route::get('logout', [\App\Http\Controllers\logoutController::class, 'getLogout'])->name('logout');


    Route::get('/registration', function (){
        if(Auth::check()){
            return redirect()->route('user.IndexUser');
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);

});


 Route::post('user.private', [\App\Http\Controllers\MessageController::class, 'message']);

Route::get('/test',  [\App\Http\Controllers\TestController::class,'Show'] );
Route::get('/user/{id}',  [\App\Http\Controllers\UserController::class,'Profile'] );

Route::get('/forgetPassword', [\App\Http\Controllers\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('/forgetPassword', [\App\Http\Controllers\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('reset-password/{token}', [\App\Http\Controllers\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [\App\Http\Controllers\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
