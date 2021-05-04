<?php

use Illuminate\Support\Facades\Route;

include('custom_routes/admin.php');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('/');
