<?php
Route::namespace('Admin')->prefix('admin')->middleware(['guest'])->name('admin.')->group(function (){
    Route::get('/', 'AdminController@index')->name('dashboard');
});
