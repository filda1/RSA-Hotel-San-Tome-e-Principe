<?php

use App\Post;
use App\Rating;
use Illuminate\Http\Request;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

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

// VIEW USER
/*Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

/*Route::get('/hotel/{id}', function ($id) {
    return view('hotel');
    //return $id;
})->name('hotel');*/


Route::get('/voucher', function () {
    return view('voucher');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
    })->name('lang');

Route::get('/', 'WelcomeController@index')->name('welcome');

/*Route::get('/', function () {
    return view('mantenimiento');
});*/

Route::get('/hotel', function () {
    return view('hotel');
    //return $id;
})->name('hotel');

Route::get('/hotels', 'HotelsController@index')->name('hotels');

Route::get('/services', 'ServiceController@index')->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('//methodspayment', 'MethodspaymentController@index')->name('methodspayment');
/*Route::get('/methodspayment', function () {
    return view('methodspayment');
})->name('methodspayment');*/

Route::get('/contact', 'ContactController@index')->name('contact');

/*Route::get('/contact', function () {
    return view('contact');
})->name('contact');*/


Route::get('reserveemail', function () {
    return view('reserveemail');
})->name('reserveemail');

/*Route::get('', function () {
    return view('environment');
})->name('environment');*/

Route::get('/environment', 'EnvironmentController@index')->name('environment');

Route::get('/location', 'LocationController@index')->name('location');

/*Route::get('/location', function () {
    return view('location');
})->name('location');*/

Route::get('/validation','ValidationController@index')->name('validation');


Route::get('/comments', 'CommentsController@index')->name('comments');

Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin.home');


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/rating', 'RatingController@index');
Route::post('/rating/send', 'RatingController@send');

/*Route::get('admin/post', function () {
    return view('admin.post.post');
})->name('admin.post');*/

/*Route::get('admin/show', function () {
    return view('admin.post.show');
});*/

/*Route::get('admin/edit', function () {
    return view('admin.post.edit');
});*/







//****** Buscador ******** */
Route::any ( '/search', 'SearchController@search'); 
Route::any ( '/searcheng', 'SearchengController@search');  
Route::any ( '/searchpt', 'SearchptController@search');


// Email related routes
Route::get('mail/home', 'MailController@home');
Route::post('mail/send', 'MailController@send');



Auth::routes();

Route::any('/reserve', 'ReserveController@save')->name('reserve');
Route::any('/reserve2', 'Reserve2Controller@save')->name('reserve2');
//****************************************************************** USER ************************************************************ */
// AREA USER,el home pinta head6.blade.php
Route::any('/home', 'HomeController@index')->name('home');

 // AREA USER, el click button Cancel, campos de db available y vacancies se activan
Route::get('change/{id}', 'ChangeController@index')->name('Change');
Route::post('change/{id}', 'ChangeController@index')->name('Change');






/*Route::get('admin-login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\AdminLoginController@login');*/


// ************************************************************** ADMIN ****************************************************************/


Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');

	// Admin Auth Routes
	Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin/login', 'Auth\LoginController@login');
});
 



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  
  
  
    // Password reset routes
  
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  
  });

  // Imagen General
  Route::resource('/admin/post','Admin\PostController');

  Route::resource('/admin/room','Admin\RoomController');
  Route::resource('/admin/roomeng','Admin\RoomengController');

  
  Route::resource('/admin/reserve','Admin\ReserveController');
  Route::resource('/admin/user','Admin\UserController');




Route::get('/exitreserve', function () {
    return view('exitreserve');
});


Route::get('/exitnoreserve', function () {
    return view('exitnoreserve');
});



// Comments
//Route::get('/posts', 'PostController@index')->name('post.index');
//Route::get('/posts/{post}', 'PostController@show')->name('post.show');

/*Route::get('/posts/{post}/comments', function (Post $post) {
    return $post->comments;
});
Route::post('/posts/{post}/comments', function (Request $request, Post $post) {
    $comment = new \Laravelista\Comments\Comment;
    $comment->commenter()->associate(auth()->user());
    $comment->commentable()->associate($post);
    $comment->comment = $request->comment;
    $comment->approved = true;
    $comment->save();
    return $comment;
});*/



/*Route::get('/selectpayment', function () {
    return view('selectpayment');
})->name('selectpayment');*/

Route::any('/selectpayment', 'SelectpaymentController@save')->name('selectpayment');

Route::any('/selectpayment2', 'Selectpayment2Controller@save')->name('selectpayment2');

Route::any('/optionspayment/save', 'OptionspaymentController@save')->name('optionspayment');

Route::any('/optionspayment2/save', 'Optionspayment2Controller@save')->name('optionspayment2');


Route::get('/invoice', function () {
    return view('invoice');
})->name('invoice');


// Stripe

Route::post('/payment', 'PaymentController@paymentProcess');
Route::post('/payment2', 'Payment2Controller@paymentProcess');

Route::get('/information', function () {
    return view('admin/information');
})->name('in');
