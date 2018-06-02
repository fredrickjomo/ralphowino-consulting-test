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

Route::get('/home','HomeController@index');

Route::group(['middleware'=>'auth'],function(){
Route::get('/profile/{slug}',[
    'uses'=>'ProfileController@index',
    'as'=>'profile'
]);
    Route::get('/profile/edit/profile',[
        'uses'=>'ProfileController@edit',
        'as'=>'profile.edit'
    ]);
    Route::get('/profile/update/profile',[
        'uses'=>'ProfileController@update',
        'as'=>'profile.update'
    ]);
       Route::get('friendship_status/{id}',[
        'uses'=>'FriendsController@check',
        'as'=>'check'
    ]);

    Route::get('add_friend/{id}',[
        'uses'=>'FriendsController@add_friend',
        'as'=>'add_friend'
    ]);

    Route::get('accept_friend/{id}',[
        'uses'=>'FriendsController@accept_friend',
        'as'=>'accept_friend'
    ]);



});