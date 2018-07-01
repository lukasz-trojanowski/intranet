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

Route::get(
    '/', 
    'User\NewsController@showNews');

Route::get(
    '/aktualnosci', 
    'User\NewsController@showNews');

Route::get(
    '/aktualnosci/artykul', 
    'User\NewsController@showArticle');

Route::get(
    '/galeria', 
    'User\GalleryController@showGalleryList');

Route::get(
    '/galeria/{id}', 
    'User\GalleryController@showGallery');
    

Route::get(
    '/bazawiedzy',
    'User\KnowledgeController@showKnowledge');

Route::get(
    '/kontakty',
    'User\ContactsController@showContacts');