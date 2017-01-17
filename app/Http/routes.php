<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ //probando llamar a una vista
Route::get('test/view', function(){
	return view('test',['name'=> 'adrian']);
});

//Naming controllers routes

/*Route::get('foo/name',['uses' => 'FooController@method', 'as'=>'name']);*/
Route::get('user/profile',['as'=> 'profile' , function (){
	return "adrian";
}]);

Route::get('controlador','PruebaController@index');
Route::get('controladors','Users\PruebaController@index');
Route::get('controladors/nombre/{d}','Users\PruebaController@showProfile');
Route::get('user/{id}', function($id)
{
	return 'User '.$id;
});

Route::get('caca', function(){
	echo "<h1>Pruebo html5</h1> ";
});

Route::get('/', 'WelcomeController@index');



Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
