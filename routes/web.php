 <?php

 use App\Http\Controllers\Admin\CategoryController;
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
Route::get('/category/{id}', 'CategoryController@show')->name('category.show');

//ToDo
Route::get('/news/unloading', 'NewsController@unloading')->name('news.unloading');
Route::post('/news/unloadingSend', 'NewsController@unloadingSend')->name('news.unloadingSend');

// ADMIN
Route::group(['prefix' => 'admin'], function (){
    Route::resource('/categories', Admin\CategoryController::class);
    Route::resource('/news', Admin\NewsController::class);
});
//Reviews
Route::group(['prefix' => 'review'], function(){
    Route::get('/', 'ReviewController@create')->name('review.create');
    Route::post('/store', 'ReviewController@store')->name('review.store');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
