<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentController;



Route::get('students',[StudentController::class, 'index']);
Route::post('add-student',[StudentController::class, 'store']);
Route::get('edit-student/{id}',[StudentController::class, 'edit']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
