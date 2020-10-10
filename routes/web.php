<?php
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\MyMiddlewares\IsStudent;
use App\Http\Middleware\MyMiddlewares\IsTeacher;
use App\Http\Middleware\MyMiddlewares\IsAdmin;
Auth::routes();

Route::get('user', 'HomeController@user_info');

/******************************************* Web Routes **********************************/
Route::get('/', 'HomeController@index');
Route::prefix('web')->name('page.')->group(function (){
    Route::get('/home', 'PagesController@home')->name('home');
    Route::get('pages/events', 'PagesController@events')->name('events');
    Route::get('pages/amission', 'PagesController@admission')->name('admission');
    Route::get('pages/department', 'PagesController@department')->name('department');
    Route::get('pages/notice', 'PagesController@notice')->name('notice');
    Route::get('pages/blog', 'PagesController@blog')->name('blog');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(IsAdmin::class)->group(function (){
/******************************************* Teachers Routes **********************************/
    Route::get('/teacher/edit/{teacher}', 'TeachersController@edit');
    Route::get('/teacher/create', 'TeachersController@create');
    Route::resource('/teacher', 'TeachersController');
/******************************************* Students Routes **********************************/
    Route::get('/student/show/{student}', 'StudentsController@show')->name('student.show');
    Route::get('/student/edit/{student}', 'StudentsController@edit')->name('student.edit');
    Route::post('/student/update', 'StudentsController@update')->name('student.update');
    Route::post('/student/store', 'StudentsController@store')->name('student.store');
    Route::get('/student/create', 'StudentsController@show')->name('student.create');
    Route::delete('/student/create', 'StudentsController@destroy')->name('student.destroy');
    Route::get('/student/create', 'StudentsController@create');
    Route::resource('/student', 'StudentsController');
/******************************************* Dashboard Routes **********************************/
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/settings', 'DashboardController@settings');
    Route::get('/hostel', 'DashboardController@hostel');
    Route::get('/library', 'DashboardController@library');
    Route::get('/teachers', 'DashboardController@teachers');
    Route::get('/students', 'DashboardController@students')->name('students');
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


