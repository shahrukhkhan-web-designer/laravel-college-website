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

Route::get('agriculture-course','HomeController@agriculture');
Route::get('art-humanities-course','HomeController@artshumanities');
Route::get('commerce-banking-course','HomeController@commercebanking');
Route::get('dental-course','HomeController@dental');
Route::get('design-course','HomeController@design');
Route::get('education-course','HomeController@education');
Route::get('engineering-course','HomeController@engineering');
Route::get('hotel-management-course','HomeController@hotelmanagement');
Route::get('information-technology-course','HomeController@informationtechnology');
Route::get('law-course','HomeController@law');
Route::get('management-course','HomeController@management');
Route::get('mass-communication-course','HomeController@masscommunication');
Route::get('medical-course','HomeController@medical');
Route::get('nursing-course','HomeController@nursing');
Route::get('paramedical-course','HomeController@paramedical');
Route::get('performing-art-course','HomeController@performingart');
Route::get('pharmacy-course','HomeController@pharmacy');
Route::get('sciences-course','HomeController@sciences');






Route::post('enquiry-form','AjaxController@EnquiryForm');
Route::post('admission-form','AdminController@SaveAdmission');
//Route::post('feedback-form','AdminController@feedbackForm');





