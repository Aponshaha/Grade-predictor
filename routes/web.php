<?php
Route::get('/', function()
    {
        return View::make('calc');
    });
//Route::get('/', 'CalcController@home');
Route::post('/calc', 'CalcController@calc');
