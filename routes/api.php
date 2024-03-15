<?php

use App\Libs\Hello;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test/routing/{arg?}', function (Request $request,$arg=null) {
    return Hello::json($request,'Test\Routing:index',[$arg]);
});

Route::get('/auth/login', function (Request $request) {
    return Hello::json($request,'AuthController:login');
});

Route::get('/auth/register', function (Request $request) {
    return Hello::json($request,'AuthController:register');
});

Route::get('/auth/refreshtoken', function (Request $request) {
    return Hello::json($request,'AuthController:refreshtoken');
})->middleware('auth:sanctum');

// ->middleware('auth:sanctum');
