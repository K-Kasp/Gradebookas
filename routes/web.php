<?php
use App\Http\Controllers\LectureController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('lecture');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/studentai/pazymiai/{student}', 'GradeController@getGrade')->name('grade');
    Route::post('/studentai/pazymiai/{id}', 'GradeController@storeGrade')->name('storeGrade');

    /* TODO: Atskiri routai, turi toki pati pavadinima, pakeisti, kels problemu */
    Route::get('/paskaitos', 'LectureController@getLecture')->name('lecture');
    Route::post('/paskaitos', 'LectureController@storeLecture')->name('storeLecture');
    Route::get('/paskaitos/{lecture}', 'LectureController@getUpdateLecture')->name('update-lecture');
    Route::put('/paskaitos/{id}', 'LectureController@updateLecture')->name('updatePutLecture');
    Route::delete('/paskaitos/{id}', 'LectureController@destroyLecture')->name('deleteLecture');

    Route::get('/studentai', 'StudentController@getStudent')->name('student');
    Route::post('/studentai', 'StudentController@storeStudent')->name('storeStudent');
    Route::get('/studentai/{student}', 'StudentController@getUpdateStudent')->name('update-student');
    Route::put('/studentai/{id}', 'StudentController@updateStudent')->name('updatePutStudent');
    Route::delete('/studentai/{id}', 'StudentController@destroyStudent')->name('deleteStudent');

});

