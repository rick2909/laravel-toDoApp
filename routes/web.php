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

Route::get('/', 'Todocontroller@index');

Route::post('/', 'Todocontroller@create');

Route::post('/{id}', 'Todocontroller@updaten');

Route::delete('/{id}', 'Todocontroller@delete');

//use Language route

Route::post('/language-chooser', 'LanguageController@changeLanguage');

Route::post('/language/' , array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LanguageController@changeLanguage',
));