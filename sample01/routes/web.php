<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\TaskController@index')->name('tasks.index');
Route::get('/new','App\Http\Controllers\TaskController@new')->name('tasks.new');
Route::post('/create','App\Http\Controllers\TaskController@create')->name('tasks.create');
Route::post('edit','App\Http\Controllers\TaskController@edit')->name('tasks.edit');
Route::post('renew','App\Http\Controllers\TaskController@renew')->name('tasks.renew');
Route::post('delete','App\Http\Controllers\TaskController@delete')->name('tasks.delete');