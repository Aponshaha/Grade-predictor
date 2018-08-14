<?php

Route::get('/', function()
    {
        return View('calc');
    });
//Route::get('/', 'CalcController@home');
Route::post('/calc', 'CalcController@calc');
