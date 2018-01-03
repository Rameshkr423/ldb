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
Route::group(['middleware' => 'login'], function(){
	Route::get('/', ['uses' => 'AuthController@getLogin'])->name('getLogin');
	Route::post('/login', ['as'=> 'login', 'uses' => 'AuthController@postLogin']);
});

	Route::get('/dashboard', ['middleware' => 'acl:dashboard', 'as'=> 'dashboard', 'uses' => 'DashboardController@getCollection']);
	Route::get('/processed', ['middleware' => 'acl:processed', 'as'=> 'processed', 'uses' => 'ProcessedController@getCollection']);
	Route::get('/export', ['middleware' => 'acl:export', 'as'=> 'export', 'uses' => 'ExportController@exportCollection']);
	Route::get('/useredit/{id}', ['middleware' => 'acl:dashboard', 'as'=> 'useredit', 'uses' => 'UserController@userEdit']);

	//permissions
	Route::get('/permissionlist', ['middleware' => 'acl:permissions', 'uses' => 'PermissionController@index'])->name('permissionlist');

	//roles
	Route::get('/rolelist', ['middleware' => 'acl:roles', 'uses' => 'RoleController@index'])->name('rolelist');

		//Filter
	Route::post('/filtercount', ['middleware' => 'acl:dashboard', 'uses' => 'FilterController@getCricleCount'])->name('filtercount');
	Route::get('/status-update', ['middleware' => 'acl:dashboard', 'uses' => 'FilterController@updateStatus'])->name('status-update');

	//executives
	Route::get('/executivelist', ['middleware' => 'acl:executives', 'uses' => 'ExecutiveController@index'])->name('executivelist');

	//Upload
	Route::get('/upload', ['middleware' => 'acl:dashboard', 'uses' => 'UploadController@uploadFile'])->name('upload');

Route::get('/logout', ['uses' => 'AuthController@logout'])->name('logout');