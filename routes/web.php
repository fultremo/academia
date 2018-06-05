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
Auth::routes();

Route::get('/home', function(){
    return view('home');
});

Route::get('/', 'PagesController@home')->name('pages.home');
Route::get('nosotros', 'PagesController@about')->name('pages.about');
Route::get('cursos', 'PagesController@courses')->name('pages.courses');

Route::get('blog', 'PostsController@index')->name('blog');

Route::get('contacts', 'ContactsController@index')->name('contacts.index');
Route::get('contacts/create', 'ContactsController@create')->name('contacts.create');
Route::post('contacts', 'ContactsController@store')->name('contacts.store');
//Route::resource('contacts', 'ContactsController');

Route::group([
    'prefix'    =>  'admin',
    'namespace' =>  'Admin',
    'middleware'    =>  'auth'],
    function (){
        Route::get('/', 'AdminController@index')->name('dashboard');

        Route::resource('posts', 'PostsController', ['except' =>    'show', 'as'    => 'admin']);

        /* Route::get('posts', 'PostsController@index')->name('admin.posts.index');
         //Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
         Route::post('posts', 'PostsController@store')->name('admin.posts.store');
         Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
         Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');
         Route::delete('posts/{post}', 'PostsController@destroy')->name('admin.posts.destroy');*/

        Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
        Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');
    });

/*
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');*/
