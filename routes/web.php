<?php

use App\Models\Course;
use App\Models\User;
use App\Models\UserCourses;
use Illuminate\Support\Facades\Route;

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

Route::get('/teste', function () {
    $userCourses = new UserCourses();
    $userCourses->user_id = 2;
    $userCourses->course_id = 1;
    $userCourses->save();

    $userCourses = new UserCourses();
    $userCourses->user_id = 1;
    $userCourses->course_id = 2;
    $userCourses->save();
});

Route::get('/', function () {
    return view('welcome');
});

