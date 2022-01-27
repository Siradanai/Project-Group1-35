<?php

use App\Product;
use App\Backgronud;
use App\Contents;
use Illuminate\Support\Facades\Route;
// use Auth;

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
     return view('welcome')
     ->with('product',Product::all())
     ->with('contents',Contents::all());
 });

//
Auth::routes();

Route::get('/about' , 'HomeController@about');



//route Admin
Route::get('/index','Admin\AdminController@index')->name('index');

// Types
Route::get('/TypesForm','Admin\TypesController@index')->name('typesform');
Route::post('/Types/Create','Admin\TypesController@create');
Route::get('/AddTypes','Admin\TypesController@addtypes')->name('addtypes');
Route::get('/EditTypes','Admin\TypesController@edittypes')->name('edittypes');
Route::get('/Types/edit/{id_types}','Admin\TypesController@edit');
Route::post('/Types/update/{id_types}','Admin\TypesController@update');
Route::get('/Types/delete/{id_types}','Admin\TypesController@delete');


// Product
Route::get('/admin/product/index','Admin\ProductController@index')->name('productform');
Route::post('/Product/Create','Admin\ProductController@create');
Route::get('/Product/edit/{id_product}','Admin\ProductController@edit');
Route::get('/Addproduct','Admin\ProductController@addproduct')->name('addproduct');
Route::get('/Editproduct','Admin\ProductController@editproduct')->name('editproduct');
Route::post('/Product/update/{id_product}','Admin\ProductController@update');
Route::get('/Product/delete/{id_product}','Admin\ProductController@delete');


// Background
Route::get('/admin/background/index','Admin\BackgroundController@index')->name('background');
Route::get('/Addbackground','Admin\BackgroundController@addbackground')->name('addbackground');
Route::get('/Editbackground','Admin\BackgroundController@editbackground')->name('editbackground');
Route::post('/Background/Create','Admin\BackgroundController@create');
Route::get('/Background/Edit/{id_background}','Admin\BackgroundController@edit');
Route::post('/Background/update/{id_background}','Admin\BackgroundController@update');
Route::get('/Background/delete/{id_background}','Admin\BackgroundController@delete');


// Contents
Route::get('/admin/contents/index','Admin\ContentsController@index')->name('contents');
Route::get('/Addcontents','Admin\ContentsController@addcontents')->name('addcontents');
Route::get('/Editcontents','Admin\ContentsController@editcontents')->name('editcontents');
Route::post('/Contents/Create','Admin\ContentsController@create')->name('content.create');
Route::get('/Contents/edit/{id_contents}','Admin\ContentsController@edit');
Route::post('/Contents/update/{id_contents}','Admin\ContentsController@update');
Route::get('/Contents/delete/{id_contents}','Admin\ContentsController@delete');


Route::get('/home','HomeController@index')->name('home');
Route::get('welcome','HomeController@welcome')->name('welcome');


