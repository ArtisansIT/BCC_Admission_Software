<?php

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

// Route::get('/', function () {
//     return view('Frontend.home');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','Frontend\FrontendController@index')->name('index');
Route::group(['as'=>'admin.','namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('batch', 'BatchController');
    Route::resource('Result', 'ResultController');
    Route::resource('Last-degree', 'LastdegreeController');

    Route::get('/all-student','StudentProcessingController@allStudent')->name('all_student');
    Route::get('all_pending_student','StudentProcessingController@all_pending_student')->name('all_pending_student');
    Route::get('show_student/{student}','StudentProcessingController@show_student')->name('show_student');
    Route::put('complete_calculation/{student}','StudentProcessingController@complete_calculation')->name('complete_calculation');
    Route::get('all_complete_student','StudentProcessingController@all_complete_student')->name('all_complete_student');
    Route::get('single_complete_student/{student}','StudentProcessingController@single_complete_student')->name('single_complete_student');
    Route::post('complete_student_admission','StudentProcessingController@complete_student_admission')->name('complete_student_admission');
    

    

});
Route::group(['prefix' =>'student' , 'namespace'=>'Student','as'=>'student.'], function () {
    
    Route::get('/form-view/{batch}','StudentFromSubmitController@view_form')->name('view.form');
    Route::post('/submit-form','StudentFromSubmitController@submit_form')->name('form.submit');
});

Route::group(['prefix' => 'user','as'=>'user.','namespace'=>'User','middleware'=>['auth','user']], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
