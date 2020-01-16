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

//products route
// Route::get('/product','ProductController@index');

//product  ..  routes
// Route::get('/Product','ProductController@index');

//product .. route
// Route::get('/Product','ProductController@index');

//product .. route
// Route::get('/Product','ProductController@index');
