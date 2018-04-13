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

Route::get('/', 'WelcomeController@shafin');
Route::resource('my', 'MyController');
Route::controller('rita', 'RitaController');
// Route::get('/', function(){
// 	return "hello world";
// });

Route::get('shafinr23', 'HomeController@shafin');
Route::get('shafin', 'ShafinController@shafin');
Route::get('home', 'HomeController@shafin');
// requer peramiter 
Route::get('hadi/{id}',function($jaman){

	return "shafin is a bad boy ".$jaman;
});
// optional 
Route::get('jaman/{name?}',function($rafi){
	return "this is bad ".$rafi;
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('controller/method',function(){
	return "mamurjor";
});
Route::put('controller/method',function(){
	return "mamurjor";
});
Route::post('controller/method',function(){
	return "mamurjor";
});

Route::get('/url/shafin','UrlController@index');
 
Route::get('/user',function(){
	 return view ('users.reg',['shafin_r'=> 'this is shafin rahman app' ]);
	//return view ('layout.list');
});
Route::get('/user_list','RegController@index');



// Route::get('/user',function(){
// 	return view ('users.reg',['shafin_r'=> 'this is shafin rahman app	' ]);
//    //return view ('layout.list');
// });




/* this is practice one  */
Route::post('/reg/user','RegController@postRegister');
Route::get('/reg/login','RegController@login');

Route::get('/edit/{id}','RegController@show');
Route::post('/update','RegController@update');

Route::get('/del/{id}','RegController@destory');



//'RegController@index'