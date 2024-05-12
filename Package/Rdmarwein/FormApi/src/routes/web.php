<?php
//API
use Rdmarwein\FormApi\Http\Controllers\FormBuilderAPIController;
Route::group(['middleware' => 'web','namespace'=>'Rdmarwein\FormApi\Http\Controllers'], function()
{
//Create the Form
Route::get('form-api/create/{id}',[FormBuilderAPIController::class, 'create']);
Route::post('form-api/{id}',[FormBuilderAPIController::class, 'store']);
Route::delete('form-api/{fid}/{id}',[FormBuilderAPIController::class, 'destroy']);
Route::get('form-api/dependant/{id}',[FormBuilderAPIController::class, 'getDependant']);
//PUT
Route::put('form-api/{fid}/{id}',[FormBuilderAPIController::class, 'update']);
//get the Edit
Route::get('form-api/edit/{fid}/{id}',[FormBuilderAPIController::class, 'edit']);

//Retrieve the Form
Route::get('form-api/{id}',[FormBuilderAPIController::class, 'index']);
});