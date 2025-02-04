<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json(['message' => 'Hello World!']);
});

Route::post('/proposals', function (Request $request) {
    return response()->json(['message' => 'Proposal created!']);
});