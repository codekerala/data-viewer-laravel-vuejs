<?php

Route::get('/', 'CustomerController@index');
Route::get('api/customer', 'CustomerController@getData');