 <?php

 use App\Http\Controllers\Admin\CategoryController;
 use App\Http\Controllers\ParserController;
 use Illuminate\Support\Facades\Auth;
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

 //Reviews
 Route::group(['prefix' => 'review'], function(){
     Route::get('/', 'ReviewController@create')->name('review.create');
     Route::post('/store', 'ReviewController@store')->name('review.store');
 });

Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    });
// Account
    Route::get('/account', 'Account\IndexController@index')->name('account');
// ADMIN
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
        Route::get('/', 'Admin\IndexController@index')->name('admin');
        Route::resource('/categories', Admin\CategoryController::class);
        Route::resource('/news', Admin\NewsController::class);
        Route::resource('/users', Admin\UserController::class);
    });
});



Route::get('/parse/news', 'ParserController@index')->name('parser');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/vk/auth', 'SocialAuthController@vkAuth')->name('vk.auth');
    Route::get('/vk/auth/callback', 'SocialAuthController@vkAuthCallback')->name('vk.callback');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
