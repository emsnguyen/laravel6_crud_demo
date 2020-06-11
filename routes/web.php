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
// Route::get('/user', 'UserController@index');
// Route::redirect('/here', '/there');
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// Route::get('/', function() {
//     return response("Home page", 200);
// });
// Route::get('/work', array("as"=>"work"), function() {
//     return View::make("work");
// });
// Route::get('/age-check', 
//     ["middleware" => "ageCheck", function() {
//     return response("100 years have been added to your life", 200);
// }]);
// Route::get('home', function () {
//     return response('not old enough', 200);
// });
Route::get("/", 'HomeController@index');
Route::get("/hotels", 'HotelController@index');
Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback')->name('auth0-callback');
Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');
Route::group(['prefix' => 'dashboard'], function () {
    Route::view('/', 'dashboard/dashboard');
    Route::get('reservations/create/{id}', 'ReservationController@create');
    Route::resource('reservations', 'ReservationController')->except('create');
});
Auth::routes();
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@create');

// Route::get('/home', 'HomeController@index')->name('home');