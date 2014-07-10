<?php

Route::get('/', 'BlogController@index');
Route::get('{permalink}', 'BlogController@show');