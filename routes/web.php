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

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'GeneralController@index');
Route::get('/details/{id}/{headline}', 'GeneralController@postDetails');
Route::get('/topic/{category_name}', 'GeneralController@selectedCategoryPost');
Route::any('/search', 'GeneralController@search');
//Fixed Page
Route::get('/about-us', 'Controller@about');
Route::get('/contact-us', 'Controller@contact');


//API Code
Route::get('/api/top-post', 'Api\ApiController@gettingTopPost');
Route::any('/api/category', 'Api\ApiController@gettingCategoryPost');

Route::any('/api/user/login', 'Api\ApiController@login');
Route::any('/api/user/registration', 'Api\ApiController@registration');


//Start Populating Homepage
/*Route::get('/home/slider-area', 'GeneralController@homeSliderArea');
Route::get('/home/first-row-area', 'GeneralController@firstRowArea');
//End Populating Homepage


Route::any('/search', 'GeneralController@search');
Route::any('/month/search', 'GeneralController@monthWiseSearch');
Route::get('/post/month/search/{month}', 'GeneralController@monthSearch');
Route::get('/contact', 'GeneralController@contact');
Route::get('/author/{author_id}', 'GeneralController@authorPost');
Route::get('/exhibition/post/details/{id}', 'GeneralController@exhibitionDetails');

//Video
Route::get('/post/video/{id}/{headline}', 'GeneralController@videoDetails');*/


Auth::routes();

Route::get('/admin/login', 'HomeController@login');
Route::get('/login', 'HomeController@login');
Route::post('/login-check', 'HomeController@doLogin');
Route::get('/user/registration', 'HomeController@userRegistration');
Route::post('/user/registration/store', 'HomeController@userRegistrationStore');
Route::post('/user/login-check', 'HomeController@userLogin');
Route::post('/comment/store', 'HomeController@commentstore');
Route::get('/logout', 'HomeController@doLogout');

Route::get('/admin/forget-pass', 'HomeController@forgetPass');
Route::post('/admin/forget-pass/email-sent', 'HomeController@forgetPassEmailSend');
Route::any('/admin/password/save', 'HomeController@passwordSave');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin-home', 'HomeController@index');
    Route::get('/home', 'HomeController@index');



//Manage Category
    Route::get('/category/create', 'CategoryController@create');
    Route::post('/category/store', 'CategoryController@store');
    Route::get('/category/show', 'CategoryController@show');
    Route::get('/category/edit/{id}', 'CategoryController@edit');
    Route::post('/category/update/', 'CategoryController@update');
    Route::get('/category/destroy/{id}', 'CategoryController@destroy');

//Manage Post
    Route::get('/post/create', 'PostController@create');
    Route::post('/post/store', 'PostController@store');
    Route::any('/post/show', 'PostController@show');
    Route::get('/post/edit/{id}', 'PostController@edit');
    Route::post('/post/update/', 'PostController@update');
    Route::get('/post/destroy/{id}', 'PostController@destroy');
    Route::get('/post/details/{id}', 'PostController@details');


//Pin Unpin Post

    Route::get('/post/unpin/{id}', 'PostController@unPin');
    Route::get('/post/pin/{id}', 'PostController@pin');
    Route::get('/post/publish/{id}', 'PostController@publish');
    Route::get('/post/draft/{id}', 'PostController@draft');


# summernote
    Route::get('/index', 'SummernoteController@index');
    Route::get('/summernote', 'SummernoteController@index');

    Route::post('/summernote', 'SummernoteController@store')->name('summernotePostSave');
    Route::get('/summernote_display', 'SummernoteController@show')->name('summernoteDispay');
//Statistics
    Route::get('/visitor-stat', 'StatisticsController@index');

//Settings
    Route::get('/settings', 'SettingsController@show');
    Route::post('/setting/update', 'SettingsController@update');

//User
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/show', 'UserController@show');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/update', 'UserController@update');
    Route::get('/user/destroy/{id}', 'UserController@destroy');

//Menu
    Route::get('/menu/create', 'MenuController@create');
    Route::post('/menu/store', 'MenuController@store');
    Route::get('/menu/show', 'MenuController@show');
    Route::get('/menu/edit/{id}', 'MenuController@edit');
    Route::post('/menu/update', 'MenuController@update');
    Route::get('/menu/destroy/{id}', 'MenuController@destroy');


//Manage Exhibition
    Route::get('/exhibition/show', 'ExhibitionController@show');
    Route::get('/exhibition/create', 'ExhibitionController@create');
    Route::post('/exhibition/store', 'ExhibitionController@store');
    Route::get('/exhibition/destroy/{id}', 'ExhibitionController@destroy');
    Route::get('/exhibition/edit/{id}', 'ExhibitionController@edit');

//Manage Videos
    Route::get('/video/show', 'VideoController@show');
    Route::get('/video/create', 'VideoController@create');
    Route::post('/video/store', 'VideoController@store');
    Route::post('/video/update', 'VideoController@update');
    Route::get('/video/destroy/{id}', 'VideoController@destroy');
    Route::get('/video/edit/{id}', 'VideoController@edit');

//Manage Exhibition Post
    Route::get('/exhibition/post/show', 'ExhibitionPostController@show');
    Route::get('/exhibition/post/create', 'ExhibitionPostController@create');
    Route::post('/exhibition/post/store', 'ExhibitionPostController@store');
    Route::get('/exhibition/post/destroy/{id}', 'ExhibitionPostController@destroy');
    Route::get('/exhibition/post/edit/{id}', 'ExhibitionPostController@edit');


//Manage Advertisement
    Route::get('/advertisement/show', 'AdvertisementController@show');
    Route::get('/advertisement/create', 'AdvertisementController@create');
    Route::post('/advertisement/update', 'AdvertisementController@update');
    Route::post('/advertisement/store', 'AdvertisementController@store');
    Route::get('/advertisement/destroy/{id}', 'AdvertisementController@destroy');
    Route::get('/advertisement/edit/{id}', 'AdvertisementController@edit');
    Route::get('/advertisement/details/{id}', 'AdvertisementController@details');

//Comment

    Route::get('/comment/show', 'CommentController@show');
    Route::post('/comment/store', 'CommentController@store');
    Route::get('/comment/delete/{id}', 'CommentController@destroy');
    Route::get('/comment/spam/{id}', 'CommentController@spam');
    Route::get('/comment/publish/{id}', 'CommentController@publish');


//Statistics
    Route::get('/today-stat', 'StatisticsController@todayStatistics');
    Route::get('/weekly-stat', 'StatisticsController@weeklyStatistics');
    Route::get('/monthly-stat', 'StatisticsController@monthlyStatistics');
});

Route::get('/test', 'Controller@test');

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/reset', function () {
    Artisan::call('migrate:fresh'); // = php artisan migrate:fresh
    Artisan::call('db:seed'); // = php artisan db:seed

// OR
    Artisan::call('migrate:fresh', ['--seed' => true]);
});


