<?php

use App\Menu;
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
//SITE
Route::get('/', 'HomeController@index')->name('home');
Route::get('/articles/{id}', 'ArticlesController@articles_list')->name('articles');
Route::get('/articles/{id}/{url_art}', 'ArticlesController@article_item')->name('article_item');
Route::get('/articles/search={text_search}','ArticlesController@search_article')->name('search_article');

//SISTEMA
Auth::routes();
Route::get('/login', 'ControlPanelController@login')->name('login');
Route::get('/control_panel', 'ControlPanelController@control_panel')->name('control_panel');
Route::get('/articles_panel', 'ControlPanelController@page_articles')->name('articles_panel');
Route::get('/new_article', 'ControlPanelController@articles')->name('new_article');
Route::get('/edit_article/{id}', 'ControlPanelController@articles')->name('edit_article');
Route::post('/edit_article/image_upload', 'ControlPanelController@upload')->name('upload');
Route::post('/save_article/{id?}', 'ControlPanelController@save_article')->name('save_article');
Route::get('/delete_article/{id}', 'ControlPanelController@delete_article')->name('delete_article');
