<?php

use App\Http\Controllers\CateroryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Models\Category;

use Illuminate\Foundation\Auth\User;
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

Route::get('/',[ProductsController::class,'index']);

Route::resource('products',ProductsController::class)->only([
    'show','edit','store','destroy' ,'create'
    ]);

Route::resource('categories',CateroryController::class);


Route::get('author/{author:username}',function (User $author){

    return view('products.index',[
        'products'=> $author->products
            //->load(['category ','author'])
    ]);
});



Route::get('categories/{category:slug}',function (Category $category){
   return view('products.index',[
      'products'=> $category->products
          //->load(['category ','author'])
 ]);
});

//Route::get('users',[UsersController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
