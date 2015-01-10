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

Route::get('adm/', function()
{
	if (Auth::check()) {
        return View::make('dashboard');
    } else {
        return View::make('login');
    }
});

Route::post('register', 'LoginController@register');

Route::post('login', 'LoginController@index');

Route::get('logout', 'LoginController@logout');

Route::get('adm/citylist', function(){
	$cities = City::all();
	return View::make('city/listcity')->with('citiesdata', $cities);
});

Route::get('adm/city/newcity', function()
{
	return View::make('city/newcity');
});

Route::post('adm/city/insert', 'CityController@store');

Route::get('adm/city/edit/{id}', 'CityController@edit');

Route::post('adm/city/update', 'CityController@update');

Route::get('adm/city/delete/{id}', 'CityController@delete');

Route::get('adm/provlist', function(){
	$provinces = Province::all();
	return View::make('prov/listprov')->with('provincesdata', $provinces);
});

Route::get('adm/prov/newprov', function()
{
	return View::make('prov/newprov');
});

Route::post('adm/prov/insert', 'ProvinceController@store');

Route::get('adm/prov/edit/{id}', 'ProvinceController@edit');

Route::post('adm/prov/update', 'ProvinceController@update');

Route::get('adm/prov/delete/{id}', 'ProvinceController@delete');


Route::get('adm/adminlist', function(){
	$admins = Admin::all();
	return View::make('admin/listadmin')->with('adminsdata', $admins);
});

Route::get('adm/admin/newadmin', function()
{
	return View::make('admin/newadmin');
});

Route::post('adm/admin/insert', 'AdmininceController@store');

Route::get('adm/admin/edit/{id}', 'AdmininceController@edit');

Route::post('adm/admin/update', 'AdmininceController@update');

Route::get('adm/admin/delete/{id}', 'AdmininceController@delete');
