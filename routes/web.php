<?php
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AudioController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\SliderController;
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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function () {
    Route::resource('roles',RoleController::class);

    Route::resource('users',UserController::class);

    Route::resource('products',ProductController::class);
//media
//ONE
//AUDIO
Route::resource('audio',AudioController::class);
//BLOG
Route::resource('blog',BlogController::class);
//VIDEO
Route::resource('video',VideoController::class);

//SEARCH
//TAG
Route::resource('tag', TagController::class);
//CATEGORY
Route::resource('category', CategoryController::class);
//HOME-SLIDER 1
Route::resource('slider',SliderController::class);

});
});