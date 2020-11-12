<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'controlador@welcome');

Route::get('/i', 'controlador@inicio');


Route::get('/p1',[
     'uses' => 'controlador@pintor1',
     'as'=> 'pintor1'
    ]);
Route::get('/p2',[
    'uses' => 'controlador@pintor2',
    'as'=> 'pintor2'
]);
Route::get('/p3',[
    'uses' => 'controlador@pintor3',
    'as'=> 'pintor3'
]);
Route::get('/p4',[
    'uses' => 'controlador@pintor4',
    'as'=> 'pintor4'
]);

Route::post('/validar','controlador@validar');
Route::get('/login','controlador@login');
    