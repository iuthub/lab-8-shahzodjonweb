<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route :: get ( ’/ ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ g e t I n d e x ’ ,
    ’ as ’ = > ’ blog . index ’
    ]);
    Route :: get ( ’ post /{ id } ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ g e t P o s t ’ ,
    ’ as ’ = > ’ blog . post ’
    ]);

Route :: group ([ ’ prefix ’ = > ’ admin ’] , function () {
    Route :: get ( ’ ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ g e t A d m i n I n d e x ’ ,
    ’ as ’ = > ’ admin . index ’
    ]);
    Route :: get ( ’ create ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ g e t A d m i n C r e a t e ’ ,
    ’ as ’ = > ’ admin . create ’
    ]);
    Route :: post ( ’ create ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ p o s t A d m i n C r e a t e ’ ,
    ’ as ’ = > ’ admin . create ’
    ]);
    Route :: get ( ’ edit /{ id } ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ g e t A d m i n E d i t ’ ,
    ’ as ’ = > ’ admin . edit ’
    ]);
    Route :: post ( ’ edit ’ , [
    ’ uses ’ = > ’ P o s t C o n t r o l l e r @ p o s t A d m i n U p d a t e ’ ,
    ’ as ’ = > ’ admin . update ’
    ]);
    });