<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForLoopController;
use App\Http\Controllers\ForEachLoopController;
use App\Http\Controllers\ForElseLoopController;
use App\Http\Controllers\IfElseConditionController;


Route::get('/',[ForLoopController::class,'ForLoopController']);
Route::get('/forEach',[ForEachLoopController::class,'ForEachLoopController']);
Route::get('/forElse',[ForElseLoopController::class,'ForElseLoopController']);
Route::get('/ifElseLogin',[IfElseConditionController::class,'LoginStatus']);
