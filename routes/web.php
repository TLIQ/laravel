 <?php

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



Route::get('/admin', 'Admin\IndexController@index')->name('admin');

Route::get('/', 'NewsController@index')->name('news');

Route::group(['prefix' => 'news'], function (){
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::post('/store', 'NewsController@store')->name('news.store');
    Route::get('/{id}/edit', 'NewsController@edit')
        ->where('id', '\d+')->name('news.edit');
    Route::put('/{id}/update', 'NewsController@update')->name('news.update');
    Route::get('/review', 'NewsController@review')->name('news.review');
    Route::post('/send', 'NewsController@send')->name('news.send');
    Route::get('/unloading', 'NewsController@unloading')->name('news.unloading');
    Route::post('/unloadingSend', 'NewsController@unloadingSend')->name('news.unloadingSend');
});

Route::group(['prefix' => 'category'], function (){
    Route::get('/', 'CategoryController@index')->name('category');
    Route::get('/{category}/find', 'CategoryController@find')->name('category.find');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
