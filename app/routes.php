<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});*/
Route::get('/', function()
{
	return View::make('pages.login');
});
Route::get('login', 'AuthController@showLogin');
Route::post('login',array('before'=>'csrf','uses'=>'AuthController@postLogin'));


Route::group(array('before' => 'auth'), function()
{
	Route::get('/home', function()
    {
    	
    	
        return View::make('pages.home');
    });

    Route::get('logout', 'AuthController@logOut');
    Route::get('registro_condominio', 'PageController@regCondominio');
    Route::get('registro_usuarios', 'PageController@regUsuarios');
    Route::get('informe_usuarios', 'PageController@infoUsuarios');
   
});