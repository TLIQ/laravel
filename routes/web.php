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

Route::get('/', 'HomeController@index')->name('news');
Route::get('/category/{id}', 'CategoryController@show')->name('categories.show');

Route::group(['prefix' => 'news'], function (){
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::post('/store', 'NewsController@store')->name('news.store');
    Route::get('/{news}/edit', 'NewsController@edit')->name('news.edit');
    Route::put('/{id}/update', 'NewsController@update')->name('news.update');
    Route::delete('/delete', 'NewsController@deleteNews')->name('news.delete');

    Route::get('/unloading', 'NewsController@unloading')->name('news.unloading');
    Route::post('/unloadingSend', 'NewsController@unloadingSend')->name('news.unloadingSend');
});

Route::group(['prefix' => 'categories'], function (){
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/store', 'CategoryController@store')->name('categories.store');
    Route::get('/edit', 'CategoryController@edit')->name('categories.edit');
    Route::put('/update', 'CategoryController@update')->name('categories.update');

    Route::get('/all', 'CategoryController@allCat')->name('categories.allCat');
});

Route::group(['prefix' => 'review'], function(){
    Route::get('/', 'ReviewController@review')->name('news.review');
    Route::post('/send', 'ReviewController@send')->name('news.send');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
