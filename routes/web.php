<?php


//HomePage Route
Route::get('/','HomeController@index');

//about us route
Route::get('/about','AboutController@index');

//contact us route
Route::get('/contact','ContactController@index');
Route::post('/sendMail','ContactController@sendMail');
Route::post('/send','ContactController@send');

//media routes
Route::get('/media','MediaController@index');

//Divisions route
Route::get('/Divisions','DivisionController@index');

//product  ..  routes
// Route::get('/Product','ProductController@index');

//product .. route
// Route::get('/Product','ProductController@index');

//product .. route
// Route::get('/Product','ProductController@index');
