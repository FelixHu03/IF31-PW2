<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function (Request $request){
    return response()->json(['Home', 'Profile', 'About', 'Contact Us']);
});
Route::get('/donatur', function (Request $request){
    return response()->json(
    [
        [
            'id' => 1,
            'name' => 'Felix'
        ],
        [
        'id' => 2,
        'name'=> 'Hu'
        ]
    ]
);
});
