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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//+++++++++++++++++++++++++Frontend Starts++++++++++++++++++++++++++++++++++
use App\Http\Controllers\HomePublicController;

//Home public - pages accessible to the public
Route::get('/', 'HomePublicController@index');
Route::get('/about', 'HomePublicController@about');
Route::get('/contact', 'HomePublicController@contact');
Route::post('/postcontactform', 'HomePublicController@postContactForm');
Route::get('/registration', 'HomePublicController@registration');
Route::get('/agenda', 'HomePublicController@agenda');
Route::get('/speakers', 'HomePublicController@speakers');
Route::get('/sponsors', 'HomePublicController@sponsors');
Route::get('/papers', 'HomePublicController@papers');
Route::get('/pictures', 'HomePublicController@pictures');
Route::get('/videos', 'HomePublicController@videos');
Route::get('/press-release', 'HomePublicController@pressRelease');
Route::get('/2018-gala-dinner', 'HomePublicController@galaDinner');

/*
Route::get('/products-services', 'HomePublicController@productsServices');
Route::get('/careers', 'HomePublicController@careers');
Route::get('/careers/jobdetails/{job}', 'HomePublicController@jobDetails');
Route::get('/careers/jobapplicationform/{job}', 'HomePublicController@jobApplicationForm');
Route::post('/careers/postjobapplicationform', 'HomePublicController@postJobApplicationForm');
*/


//Auth routes
Auth::routes();

//Logged in users
Route::get('/home', 'HomeController@index')->name('home');

//Logged in Admin users
Route::group(['middleware' => 'admin'], function () {
    
    Route::get('/admin/home', 'Admin\HomeController@index');
    Route::get('/admin/sponsors', 'Admin\HomeController@sponsors');
    
    Route::get('/admin/speakers', 'Admin\HomeController@speakers')->name('speakers');
    Route::get('/admin/speakers/addspeaker', 'Admin\HomeController@addSpeaker')->name('addspeaker');
    Route::post('/admin/speakers/postaddspeaker', 'Admin\HomeController@postAddSpeaker');
    Route::get('/admin/speakers/editspeaker/{speaker}', 'Admin\HomeController@editSpeaker')->name('editspeaker');
    Route::post('/admin/speakers/posteditspeaker/{speaker}', 'Admin\HomeController@postEditSpeaker');
    Route::get('/admin/deletespeaker/{speaker}', 'Admin\HomeController@deleteSpeaker')->name('deletespeaker');

    Route::get('/admin/contactformsubmissions', 'Admin\HomeController@contactformsubmissions')->name('contactformsubmissions');

    Route::get('/admin/pictures', 'Admin\HomeController@pictures')->name('pictures');
    Route::get('/admin/pictures/addpicture', 'Admin\HomeController@addPicture')->name('addpicture');
    Route::post('/admin/pictures/postaddpicture', 'Admin\HomeController@postAddPicture');
    Route::get('/admin/pictures/editpicture/{picture}', 'Admin\HomeController@editPicture')->name('editpicture');
    Route::post('/admin/pictures/posteditpicture/{picture}', 'Admin\HomeController@postEditPicture');
    Route::get('/admin/deletepicture/{picture}', 'Admin\HomeController@deletePicture')->name('deletepicture');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
