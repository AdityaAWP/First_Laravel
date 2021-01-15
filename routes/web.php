<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home');

Route::get('/movie', 'MovieController@index');

Route::get('/movie/create', 'MovieController@create');
Route::post('/movie', 'MovieController@store');

Route::get('/movie/{id}/edit', 'MovieController@edit');
Route::patch('/movie/{id}/edit', 'MovieController@update');

Route::get('/book', 'BookController@index');


Route::get('/movie/{id}', 'MovieController@show');



//Route View(digunakan ketika hanya ingin menampilkan website statis)
// Route::view('/book/statis',"detail");


//Add Data 
// Route::get('/book/add', function () {
//     $books = new \App\Book;
//     $books->title = "B";
//     $books->author = "Yuval Noah Harari";
//     $books->price = "$15.90";
//     $books->save();
// });

// //Update Data
// Route::get('/book/update', function () {
//     $books = \App\Book::find(4);
//     $books->price = "$14.90";
//     $books->update();
// });

// //Delete Data 
// Route::get('/book/delete', function () {
//     $books = \App\Book::find(6);
//     $books->delete();
// });


//Mengizinkan lebih dari 1 method
// Route::match(['GET', 'POST'], '/book/{$id}', function () {
// });

//Menggunakan semua method
// Route::any('/book', function () {
// });


//Memberi Nama Route
// Route::get('/book/add', 'BookController@index')->name('addBook');
