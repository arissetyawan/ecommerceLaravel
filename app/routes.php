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

Route::get('/', function()
{
	return View::make('hello');
});

/*
 * URL = "category/index" буде опрацьовувати контроллер - CategoryController,  метод - indexAction
 * */
Route::any("category/index", [
    "as"   => "category/index",
    "uses" => "CategoryController@indexAction"
]);

/*
 * URL = "product/index" буде опрацьовувати контроллер - ProductController,  метод - indexAction
 * */
Route::any("product/index", [
    "as"   => "product/index",
    "uses" => "ProductController@indexAction"
]);





