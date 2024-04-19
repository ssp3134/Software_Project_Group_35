<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| API Routes by @bhijeet
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::fallback(function () {
    return response()->json([
        'status' => false,
        'message' => 'Invalid Route !!',
    ], 200);
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('validateuser', 'validateUser');

    Route::post('login_api', 'login_api');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::get('refresh', 'refresh');
    Route::post('update_password', 'UpdatePassword');
    Route::post('un-block-user', 'unBlockUser');
    Route::get('TokenError', 'TokenError')->name('TokenError');
    Route::get('get-unread-notification', 'getUnReadNotification');
    Route::get('get-read-notification', 'getReadNotification');
    Route::post('mark-read-notification', 'markReadNotification');
    Route::post('GetBiometicAttendance', 'GetBiometicAttendance');
});

Route::controller(StudentController::class)->group(function () {
    Route::post('student', [StudentController::class, 'addStudent']);
    Route::get('students', [StudentController::class, 'getAllStudents']);
    Route::get('students/{aadhar_card_no}', [StudentController::class, 'getStudentByAadharCardNo']);
    Route::delete('students/{aadhar_card_no}', [StudentController::class, 'deleteStudentByAadharCardNo']);
    Route::put('students/{aadhar_card_no}', [StudentController::class, 'updateStudentByAadharCardNo']);
});

Route::controller(EmployeeController::class)->group(function () {
    Route::post('employee', [EmployeeController::class, 'addEmployee']);
    Route::get('employees', [EmployeeController::class, 'getAllEmployees']);
    Route::get('employees/{aadhar_card_no}', [EmployeeController::class, 'getEmployeeByAadharCardNo']);
    Route::delete('employees/{aadhar_card_no}', [EmployeeController::class, 'deleteEmployeByAadharCardNo']);
    Route::put('employees/{aadhar_card_no}', [EmployeeController::class, 'updateEmployeeByAadharCardNo']);
});

include ('adminRoutes.php');
include ('userRoutes.php');

