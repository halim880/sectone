<?php
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\MyMiddlewares\IsStudent;
use App\Http\Middleware\MyMiddlewares\IsTeacher;
use App\Http\Middleware\MyMiddlewares\IsAdmin;
Auth::routes();

Route::get('user', 'HomeController@user_info');

/******************************************* Home Routes **********************************/
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('pages/events', 'HomeController@events');
Route::get('pages/advisors', 'HomeController@advisors');
Route::get('pages/members', 'HomeController@members');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(IsAdmin::class)->group(function (){
/******************************************* Teachers Routes **********************************/
    Route::get('/teacher/edit/{teacher}', 'TeachersController@edit');
    Route::get('/teacher/create', 'TeachersController@create');
    Route::resource('/teacher', 'TeachersController');
/******************************************* Dashboard Routes **********************************/
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/settings', 'DashboardController@settings');
    Route::get('/hostel', 'DashboardController@hostel');
    Route::get('/library', 'DashboardController@library');
    Route::get('/teachers', 'DashboardController@teachers');
    Route::get('/hostel/member/{member}', 'DashboardController@member_show');
});


Route::namespace('Teacher')->prefix('teacher')->middleware(IsTeacher::class)->group(function(){
    Route::get('/home', 'TeachersController@home');
    Route::get('/attendance/home', 'AttendanceController@home');
    Route::get('/attendance/all/{course}', 'AttendanceController@all_attendance');
    Route::post('/attendance/review', 'AttendanceController@review');
    Route::get('/attendance/update', 'AttendanceController@update');
    Route::post('/attendance/sheet', 'AttendanceController@sheet');
    Route::get('/attendance/delete', 'AttendanceController@delete');
});

/******************************************* Library Routes **********************************/
Route::namespace('Library')->prefix('library')->name('library.')->group(function (){
    Route::resource('book','BooksController');
    Route::post('book/store','BooksController@store')->name('book.store');

    Route::get('book/issue/{book}', 'LibraryController@issueBook')->name('book.issue');
    Route::Post('book/', 'LibraryController@submitIssue')->name('book.issue.submit');
});

Route::namespace('Student')->prefix('student')->middleware(IsStudent::class)->group(function (){
     Route::get('/home', 'StudentsController@home');
     Route::get('/attendance', 'StudentsController@attendance');
     Route::get('/attendance/all/{course}', 'StudentsController@all_attendance');
     Route::get('/attendance/show/', 'StudentsController@show');
     Route::get('/form/create', 'StudentsController@create_form');
     Route::get('/form/submit', 'StudentsController@form_submit');
     Route::get('/form/check', 'StudentsController@check');
     Route::get('/library/books', 'StudentsController@books');
});


Route::get('test', function(){
    return view('admin.student.show');
});


