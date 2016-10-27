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
*/

Route::get('/', 'HomeController@index');
Route::get('/ser', 'HomeController@quienesomos');
Route::get('/programas', 'HomeController@programas');
Route::get('/galerias', 'HomeController@galerias');
Route::get('/contacto', 'HomeController@contacto');
Route::post('/contacto', 'HomeController@email');

//Route::get('auth/login', 'Auth\AuthController@getLogin','as'=>'login']);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register','Auth\AuthController@postRegister');

Route::get('auth/logout',function(){
 Auth::logout();
 return redirect('/');
});

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/admin/welcome', 'AdminController@index');
Route::get('admin/companys', 'CompanyController@index');
Route::post('admin/companys','CompanyController@store');
Route::post('admin/companys/{id}','CompanyController@update');

//empleados

Route::get('admin/employees', 'EmployeeController@index');
Route::get('admin/employees/create', 'EmployeeController@create');
Route::post('admin/employees', 'EmployeeController@store');
Route::get('admin/employees/{employees}/edit', 'EmployeeController@edit');
Route::post('admin/employees/{id}', 'EmployeeController@update');

//menus

Route::get('admin/menues', 'MenuController@index');
Route::get('admin/menues/create', 'MenuController@create');
Route::post('admin/menues', 'MenuController@store');
Route::get('admin/menues/{menu}/edit', 'MenuController@edit');
Route::post('admin/menues/{id}', 'MenuController@update');

//categorias

Route::get('admin/categories', 'CategoryController@index');
Route::get('admin/categories/create', 'CategoryController@create');
Route::post('admin/categories', 'CategoryController@store');
Route::get('admin/categories/{category}/edit', 'CategoryController@edit');
Route::post('admin/categories/{id}', 'CategoryController@update');

//contenido

Route::get('admin/contents', 'ContentController@index');
Route::get('admin/contents/create', 'ContentController@create');
Route::post('admin/contents', 'ContentController@store');
Route::get('admin/contents/{content}/edit', 'ContentController@edit');
Route::post('admin/contents/{id}', 'ContentController@update');

//detalle por contenido

Route::get('admin/details/{content}/show', 'DetailContentsController@show');
Route::get('admin/details/{content}/addDetail', 'DetailContentsController@addDetail');

//detalle contenido

Route::get('admin/details', 'DetailContentsController@index');
Route::get('admin/details/create', 'DetailContentsController@create');
Route::post('admin/details', 'DetailContentsController@store');
Route::get('admin/details/{detail}/edit', 'DetailContentsController@edit');
Route::post('admin/details/{id}', 'DetailContentsController@update');




