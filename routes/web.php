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

<<<<<<< HEAD
//products route
// Route::get('/product','ProductController@index');
=======
//Divisions route
Route::get('/Divisions','DivisionController@index');
>>>>>>> 1e56e7d8d14fad39cde33fec1d247d3bf8adc7ff

//product  ..  routes
// Route::get('/Product','ProductController@index');

//product .. route
// Route::get('/Product','ProductController@index');

//product .. route
// Route::get('/Product','ProductController@index');
