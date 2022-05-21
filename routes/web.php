<?php
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
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

Route::get('refresh-csrf', function() {
    return csrf_token();
})->name('refresh-csrf');

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about-programme-co-directors-message', 'AboutMessageController@index')->name('about_message');
Route::get('/about-programme-overview', 'AboutOverviewController@index')->name('about_overview');
Route::get('/about-programme-management', 'AboutManagementController@index')->name('about_management');
Route::get('/about-international-academic-faculty', 'AboutFacultyController@index')->name('about_faculty');
Route::get('/about-learning-environment', 'AboutLearningController@index')->name('about_learning');
Route::get('/about-news-events', 'AboutNewsController@index')->name('about_news');
Route::get('/about-news-events-details', 'AboutNewsController@details')->name('about_news_details');
Route::get('/about-contact-us', 'AboutContactUsController@index')->name('about_contact_us');

\App\Language::indexRoute();

// Route::get('/', 'IndexController@index')->name('index');