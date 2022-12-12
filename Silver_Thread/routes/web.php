<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WeddingsController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Models\Contact;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


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
    return view('home');
});


Route::post('/admin/login', [AdminController::class,'submit_login']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::post('logout',LogoutController::class)->name('logout');
});

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'gallery'])->name('gallery');

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');

Route::get('/weddings', [App\Http\Controllers\WeddingsController::class, 'weddings'])->name('weddings');

Route::get('/corporate', [App\Http\Controllers\CorporateController::class, 'corporate'])->name('corporate');

Route::get('/social', [App\Http\Controllers\SocialController::class, 'social'])->name('social');

Route::get('/team', [App\Http\Controllers\TeamController::class, 'team'])->name('team');

Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail']);
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail']);
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/contact',function(){
    return view('contact');
});

Route::post('/contact',function(){
    $contact=new contact();
    $contact->Name=request('Name');
    $contact->Email=request('Email');
    $contact->Telephone=request('Telephone');
    $contact->Subject=request('Subject');
    $contact->Message=request('Message');
    $contact->save();

    return redirect('/contact');
});