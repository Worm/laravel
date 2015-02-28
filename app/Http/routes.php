<?php

Route::bind('songs', function($slug)
{
	return \Razor\Song::where('slug', $slug)->first();
});


$router->resource('songs','SongsController',[
	'only' => [
		'index','show','update','edit','create','store','destroy'
	],
	'names' => [
		'index' => 'songs_path',
		'show' => 'song_path'
	]
]);

$router->resource('articles', 'ArticleController');

Route::get('test','HomeController@feed');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);





