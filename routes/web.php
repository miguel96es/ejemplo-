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


Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/single','PagesController@single');

Route::get('/contact','PagesController@contact');

Route::get('/under','PagesController@under');

Route::post('mensajes',function(){
  //enviar correo
$data = request()->all();
//var_dump($data);
Mail::send("emails.mensaje", $data, function($message) use ($data){
  $message->from($data['correo'], $data['nombre'])
  ->to('jperez.ejemplo1@gmail.com','Juan')
  ->subject($data['mensaje']);
});

//  return request()->all();
return back();

})->name('mensajes');

/*
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/under', function () {
    return view('under');
});
*/
