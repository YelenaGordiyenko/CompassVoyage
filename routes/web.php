<?php

use Illuminate\Support\Facades\Input;
use App\User;

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

Route::get('/', 'PagesController@home');
Route::get('/packages', 'PagesController@packages');
Route::get('/flights', 'PagesController@flights');
Route::get('/contactus', 'ContactController@show');
Route::post('/contactus', 'ContactController@mail');
Route::get('/about', 'PagesController@about');

Route::resource('travels', 'TravelsController');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/admin', function(){
    return 'you are admin';
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::get ( '/welcome', function () {
    return view ( 'welcome' );
} );
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );