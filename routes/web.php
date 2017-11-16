<?php

Route::auth();


Route::get('/login', ['as'=>'auth.login', function(){
	return view('auth.login');
}]);

Route::get('backend/dashboard', ['as'=>'backend.dashboard', 'uses'=> 'Backend\DashboardController@index']);


Route::get('/', function () {
    return view('welcome');
});
