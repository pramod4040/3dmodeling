<?php

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

# Authentication Routes
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware'=>'auth', 'namespace'=>'Admin', 'prefix'=>'admin'], function(){
  Route::resource('dashboard', 'DashboardController');

  Route::resource('category', 'CategoryController');

  Route::get('/category/slug/{title}', 'CategoryController@slug');

  Route::resource('product', 'ProductController');

  Route::resource('service', 'ServiceController');

  Route::get('/service/slug/{title}', 'ServiceController@slug');

  Route::resource('client', 'ClientController');

  Route::resource('news', 'NewsController');

  Route::get('/news/slug/{title}', 'NewsController@slug');

  Route::get('/news/toggle-status/{id}', 'NewsController@toggleStatus');

  Route::get('/enquiry/contactus', 'ContactUsController@index')->name('contactusList');

  Route::delete('/contact-us/{id}', 'ContactUsController@deleteContact')->name('deleteContactus');

  Route::get('/enquiry/online', 'EnquiryController@index')->name('enquiryList');

  Route::delete('/remove/enquiry/{id}', 'EnquiryController@deleteEnquiry')->name('deleteEnquiry');

  //Dynamic Pages
  Route::get('/pages/{page}', 'PagesController@particular');

  Route::put('/pages/{page}/{id}', 'PagesController@particularUpdate');

  Route::resource('award', 'AwardController');

  Route::resource('bannerimage', 'BannerimageController');

  // Route::get('/contact-us', 'ContactUsController@index');
  //
});


Route::group(['namespace'=>'Front'], function(){

  Route::get('/', 'HomeController@index');

  Route::get('category/details/{slug}', 'ProductController@listProduct');

  Route::get('product/details/{slug}', 'ProductController@productDetails');

  Route::get('service/details/{slug}', 'ServiceController@index');

  Route::get('news/details/{slug}', 'NewsController@newsDetails');

  Route::get('news', 'NewsController@listNews');

  Route::get('client', function(){
    $clients = \App\Models\Client::all();
    return view('front.client.index', compact('clients'));
  });

  Route::get('contact-us', 'ContactusController@index')->name('contactus');

  Route::post('contact-us/send', 'ContactusController@save')->name('contactus.send');

  Route::get('/pages/{page}', 'PagesController@findParticular');

  Route::get('award', function(){
    $award = \App\Models\Award::all();
    return view('front.pages.awards', compact('award'));
  });

  Route::post('/save/enquiry', 'EnquiryController@save')->name('saveEnquiry');

  Route::post('/product/enquiry', 'EnquiryController@productEnquiry')->name('saveProductEnquiry');

});
