<?php

use App\Proposal\Infra\Http\Controllers\CreateProposalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json(['message' => 'Hello World!']);
});

Route::post('/proposals', CreateProposalController::class.'@__invoke')->middleware('api');