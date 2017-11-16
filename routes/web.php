<?php



Route::get('/auth/login',  [ 'as'=>'auth.login', 'uses'=>'Auth\\LoginController@showLoginForm']);
Route::post('/auth/login', [ 'as'=>'login', 'uses'=>'Auth\\LoginController@login']);
Route::get('/auth/logout', [ 'as'=>'auth.logout', 'uses'=>'Auth\\LoginController@logout']);


Route::get('backend/dashboard', ['as'=>'backend.dashboard', 'uses'=> 'Backend\DashboardController@index']);


Route::get('/', function () {
    return view('welcome');
});
