<?php
/*
*/
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

//Route::get('/', 'HomeController@home');
Route::get('/homex', 'PagesController@homex');
Route::get('/about', 'PagesController@about');

Route::get('/about1', 'PagesController@about1');
Route::get('/contact1', 'PagesController@contact1');
Route::get('/homes', 'PagesController@homes');

Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');

Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');
Route::post('/comment', 'CommentsController@newComment');







Route::get('sendemail', function () {
	
	$data = array(
			'name' => "Curso Laravel",
	);

	Mail::send('emails.welcom', $data, function ($message){

		$message->from('juanc.aliendresd@gmail.com', 'Curso Laravel');

		$message->to('jaliendres123@gmail.com')->subject('test email Curso Laravel');

	});

	return "Tu email ha sido enviado correctamente";   
});









//dd(env('APP_VERSION'));



/*Route::get('/',function(){
	return 'hola mundo';
});*/

/*/*Route::get('testing/cualquiera/nuevo',function(){
	return 'Aprendiendo rutas';
});

Route::get('usuarios/{nombre?}',function($nombre='SIN_PARAMETRO'){
	return $nombre;

})->where('nombre','[a-zA-Z]+')//solo letras may y min
  //->where('nombre','\d+')//solo digitos
  //->where('nombre','\w+')//cualquier alfanumerico	
 ;
 
Route::get('usuarios',function(){
	//Devuelve a todos los usuarios
});
 Route::post('usuarios',function(){
	//Crea un nuevo usuario
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
