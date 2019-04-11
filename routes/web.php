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

//pattern


        

Route::group(['middleware' => 'fw-only-whitelisted'], function () 
    {






Route::pattern('id', '\d+');
Route::pattern('hash', '[a-z0-9]+');
Route::pattern('hex', '[a-f0-9]+');
Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
Route::pattern('base', '[a-zA-Z0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('username', '[a-z0-9_-]{3,16}');

///







//LOGIN
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');



// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


 



/////////////////////////////////////////////////////////////////////////////////////////////////auuuuuuuuthhhhhhhhhhhhhhhh


Route::group(['middleware' => ['auth']], function() {

	
Route::group(['prefix' => 'admin'], function() {
		

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/////////////////////////////////////////////////////LOGINS


Route::get('logs',['as'=>'logs.logslist','uses'=>'LoginsController@logslist','middleware' => ['permission:logs-list']]);

Route::get('logs/delete',['as'=>'logs.delete','uses'=>'LoginsController@deletelogs','middleware' => ['permission:logs-list']]);


Route::get('logs/mylogins',['as'=>'logs.mylogs','uses'=>'LoginsController@mylogins']);  /////VIGILAR




	///////////////////////////////////////////////LOGINS





/////////////////////////////////BACKPUP

Route::get('backup',['as'=>'backup.list','uses'=>'BackupController@index','middleware' => ['permission:backup-admin']]);
Route::get('backup/create',['as'=>'backup.create','uses'=>'BackupController@create','middleware' => ['permission:backup-admin']]);
Route::get('backup/download/{file_name}',['as'=>'backup.download','uses'=>'BackupController@download','middleware' => ['permission:backup-admin']]);
Route::get('backup/delete/{file_name}',['as'=>'backup.delete','uses'=>'BackupController@delete','middleware' => ['permission:backup-admin']]);



/////////////////////////////////BACKUP





///////////////////////////////////////////////contraseña cambio



Route::get('users/profile','UserController@profile')->name('profile');

Route::post('users/changePassword','CambiarContraseñaController@changePassword')->name('changePassword');


Route::get('users/changePassword','CambiarContraseñaController@showChangePasswordForm');


/////////////////////////////////////////////contraseña cambio

//////////////////////////////////////roles




Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-create|role-update|role-delete|role-list']]);
   
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);


   Route::post('roles/store',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);


    Route::get('roles/{slug}',['as'=>'roles.show','uses'=>'RoleController@show','middleware' => ['permission:role-list']]);

	Route::get('roles/{slug}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-update']]);
	
	Route::patch('roles/{slug}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-update']]);


	Route::get('roles/delete/{slug}',['as'=>'roles.showdelete','uses'=>'RoleController@showdelete','middleware' => ['permission:user-delete']]);

	Route::delete('roles/{slug}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	//////////////////////////////////////roles



	//////////////////////////////////////USUARIOS


Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);


 Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:user-create']]);


   Route::post('users/store',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:user-create']]);


Route::get('users/{slug}',['as'=>'users.show','uses'=>'UserController@show','middleware' => ['permission:user-list']]);

   Route::get('users/{slug}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:user-update']]);

 Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:user-update']]);


Route::get('users/delete/{slug}',['as'=>'users.showdelete','uses'=>'UserController@showdelete','middleware' => ['permission:user-delete']]);


Route::delete('users/{slug}',['as'=>'roles.destroy','uses'=>'UserController@destroy','middleware' => ['permission:role-delete']]);


	//////////////////////////////////////usuarios


});
});



});
