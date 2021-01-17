<?php

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Restful CRUD API for the Employee Table
Route::apiResource('/employee', 'EmployeeController');
//Restful CRUD API for the Department Table
Route::apiResource('/department', 'DepartmentController');
//Restful CRUD API for the Position Table
Route::apiResource('/position','PositionController');