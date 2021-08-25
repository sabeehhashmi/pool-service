<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoolService;

use App\Http\Controllers\StripeController;

use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PoolServiceController@index');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () { return view('home'); });


Route::get('/testimonial', function () { return view('testimonial'); });

Route::get('/faq', function() { return view('faq'); });

Route::get('/contact-support', function () { return view('contact'); });

Route::get('/subscription-started', function () { return view('subscription-started'); });
Route::get('/free-signup', function () { return view('free-signup'); });

Route::get('/getdemo', function () { return view('get-demo'); });
Route::get('/privacy-policy', function () { return view('privacy-policy'); });
Route::get('/getdemo-confirmation', function () { return view('getdemo-confirmation'); });
Route::get('/contact-support-confirmation', function () { return view('contact-support-confirmation'); });
Route::get('/userlogin', function () { return view('login'); });
Route::get('/company-sigup', function () { return view('signup'); });
Route::post('/check-plan', [App\Http\Controllers\Plans::class,'checkPlans']);
Route::post('/check-coup', [App\Http\Controllers\Plans::class,'CheckCoup']);
Route::post('/make-plan', [App\Http\Controllers\Plans::class,'makePalns']);
Route::post('/add-ticket', [App\Http\Controllers\Plans::class,'addTicket']);
Route::post('/mailchimp-suscribe', [App\Http\Controllers\MailChimp::class,'store']);
// Route::get('/login', function () { return view('login'); });

Route:: get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route:: get('/auth/register',[MainController::class,'register'])->name('auth.register');
Route:: post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route:: get('check',[MainController::class,'check'])->name('auth.check');
Route:: get('subscriptionPlan',[MainController::class,'subscriptionPlan'])->name('auth.subscriptionPlan');
Route:: get('registerSub',[MainController::class,'registerSub'])->name('auth.registerSub');


// Route::get('/free-signup', function () { return view('free-signup'); });



// Route::get('/signuppage', function () { return view('signup'); });

Route::get('/signup-code-access', function () { return view('signup-code-access'); });

Route::get('/privacy', function() { return view('privacy'); });

Route::get('/subscription/create', ['as'=>'home','uses'=>'SubscriptionController@index'])->name('subscription.create');
Route::post('order-post', ['as'=>'order-post','uses'=>'SubscriptionController@orderPost']);


Route::get('stripe', [StripeController::class, 'stripe']);
//Route::post('stripePayment', [StripeController::class, 'stripePost'])->name("stripePayment.stripePost");
Route::post('stripePayment', ['as'=>'stripePayment','uses'=>'StripeController@stripePost']);

