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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

$adminConfig = [
    'prefix' => 'admin',
    'namespace' => 'Admin'
];
Route::group($adminConfig, function () {
    /**
     * HOME PAGE ROUTES
     */
    Route::get('home-page/{lang}', 'HomePageController@index')->name('home-page.index');
    Route::post('home-page/update/{id}', 'HomePageController@update')->name('home-page.update');

    Route::post('paragraphs/update/{id}', 'ParagraphController@update')->name('paragraphs.update');
    Route::post('working-process/update/{id}', 'WorkingProcessController@update')->name('working-process.update');
    Route::post('working-process/services/update/{id}', 'WorkingProcessServiceController@update')->name('working-process.services.update');

    Route::post('images/update/{image_id}/{text_id?}', 'ImageController@update')->name('images.update');

    /**
     * ABOUT US PAGE
     */
    Route::get('about-us-page/{lang}', 'AboutUsController@index')->name('about-us-page.index');
    Route::post('about-us-page/update/{id}', 'AboutUsController@update')->name('about-us-page.update');

    /**
     * CONTACT US PAGE
     */
    Route::get('contact-us-page/{lang}', 'ContactUsController@index')->name('contact-us-page.index');
    Route::post('contact-us-page/update/{id}', 'ContactUsController@update')->name('contact-us-page.update');

    /**
     * SERVICES PAGE
     */
    Route::get('services-page/{lang}', 'ServicesPageController@index')->name('services-page.index');
    Route::post('services-page/update/{id}', 'ServicesPageController@update')->name('services-page.update');
});

Route::get('/home', 'HomeController@index')->name('home');
