<?php
session_start();
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

// Student routes
Route::get('/testit', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@addStudent')->name('students.addStudent');
Route::get('/students/deleteStudent/{id}', 'StudentController@deleteStudent')->name('students.deleteStudent');
Route::get('/students/saveTest{curs}', 'StudentController@saveTest')->name('students.saveTest');

//Test routes
Route::get('/testit/home', 'TestController@home')->name('testit.home');
// HTML test route
Route::get('/testit/htmltest', 'TestController@htmltest')->name('testit.htmltest');
route::get('/testit/addResultHtml/{val}/{nr}','TestController@addResultHtml')->name('testit.addResultHtml');

//CSS test route
Route::get('/testit/csstest', 'TestController@csstest')->name('testit.csstest');
route::get('/testit/addResultCss/{val}/{nr}','TestController@addResultCss')->name('testit.addResultCss');

//PHP test route
Route::get('/testit/phptest', 'TestController@phptest')->name('testit.phptest');
route::get('/testit/addResultPhp/{val}/{nr}','TestController@addResultPhp')->name('testit.addResultPhp');

?>
