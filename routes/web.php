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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/add-notebook', 'NotebooksController@ShowAddNotebookForm')->name('notebooks.add');
Route::post('/add', 'NotebooksController@addNotebook')->name('notebooks.save');
Route::get('/notebooks', 'NotebooksController@showNotebooks')->name('notebooks');
Route::delete('/notebooks/{id}', 'NotebooksController@destroy')->name('notebooks.delete');
Route::get('/notebooks/edit/{id}', 'NotebooksController@showEditForm')->name('notebooks.edit');
Route::put('/notebooks/update/{id}', 'NotebooksController@update')->name('notebooks.update');