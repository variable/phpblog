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
// Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
Route::get('login', array('as'=>'login', function(){
    return view('auth.login');
}));

Route::get('/blog', 'ArticleController@index');

Route::get('/blog/new', 'ArticleAuthController@createForm');
Route::post('/blog/new', 'ArticleAuthController@create')->name('create');
