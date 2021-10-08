<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hello', 'HomeController@hello')->name('hello');

//Tweets
Route::get('/timeline', 'TweetsController@timeline');
Route::post('//tweet/create', 'TweetsController@creatTweet')->name('creatTweet');
Route::get('/tweet/deatil/{tweet_id}', 'TweetsController@displayTweetdetails');


//Email
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@contactPost')->name('contactPost');




