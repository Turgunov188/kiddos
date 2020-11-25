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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::name('home')->get('/', 'KindergartenController@index');

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/
// Home
Route::prefix('')->namespace('Front')->group(function () {
   Route::name('home')->get('/', 'KindergartenController@index');
   Route::name('about')->get('/about', 'KindergartenController@about');
   Route::name('course')->get('/course', 'KindergartenController@course');
   //Route::name('courses')->get('/courses', 'KindergartenController@courses');
   Route::name('blog')->get('/blog', 'KindergartenController@blog');
   Route::name('contact')->get('/contact', 'KindergartenController@contact');
});

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->namespace('Back')->group(function () {
   Route::middleware('admin')->group(function () {
      Route::name('dashboard')->get('/dashboard', 'AdminController@index');
      Route::resource('teachers', 'AdminController');
      Route::name('upload')->post('/teachers/create', 'AdminController@upload'); //!!!upload

      Route::name('blogsdashboard')->get('/blogsdashboard', 'BlogController@index');
      Route::resource('blogs', 'BlogController');
      Route::name('uploadblog')->post('/blogs/create', 'BlogController@uploadblog');

      Route::name('coursedashboard')->get('/coursedashboard', 'CourseController@index');
      Route::resource('courses', 'CourseController');
      Route::name('uploadcourse')->post('/courses/create', 'CourseController@uploadcourse');
   });

});


