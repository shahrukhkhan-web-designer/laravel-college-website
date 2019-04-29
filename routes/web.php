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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('contact-us','HomeController@contactUs');
Route::get('scholarship','HomeController@scholarShip');
Route::get('noida-international-university','HomeController@noidaInternationUniversity');
Route::get('glocal-university','HomeController@gloculUniversity');
Route::get('admission-form','HomeController@admission');
Route::get('programs','HomeController@programs');
Route::get('who-we-are','HomeController@whoWeAre');
Route::get('terms-and-conditions','HomeController@termsConditions');
Route::get('privacy-policy','HomeController@privacy');
Route::get('feedback','HomeController@feedback');
Route::post('enquiry-form','AjaxController@EnquiryForm');
Route::post('admission-form','AdminController@SaveAdmission');




