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
    return '!!!';
});

Route::get('/employee/{id}', 'EmployeeController@showOne');

Route::get('/employee/{id}/{param}', 'EmployeeController@showField')
-> where([
  'id' => '[0-9]+',
  'param' => '(name|surname|salary)'
]);

  Route::get('test/show', 'TestController@show');
  Route::get('derectiv/test', 'DerectivController@one');
  Route::get('nasledovanie/test', 'NasledController@one');

  Route::get('blade', function () {
    return view('child');
  });

  Route::get('nasledtest', 'NasledController@one');
  Route::get('practic/templ', 'TemplateController@test');

  Route::get('/posts/{id}', 'PostController@showOne');
  Route::get('/posts', 'PostController@showAll');

  Route::get('/product/{category_id}/{product_id}', 'ProductController@showProduct');
  Route::get('/product/{category_id}', 'ProductController@showCategory');
  Route::get('/categories', 'ProductController@showCategoryList');
