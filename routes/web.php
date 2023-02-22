<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\RouterInterface;

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
Route::group(['prefix' => 'welcome'], function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'home')->name('home.index');
        Route::get('/contact', 'Contact')->name('home.contacts');
    });
});
Route::get('/single', AboutController::class);

Route::resource('post', PostController::class);
    //->only(['index', 'show', 'create', 'store', 'edit', 'update']);

$posts = [
    1 => [
        'title'=> 'Introduction to Laravel',
        'content'=> 'In this page you will learn more about Laravel',
        'date'=> 2022,
    ],
    2 => [
        'title'=> 'Introduction to PHP',
        'content'=> 'In this page you will learn more about PHP',
        'date'=> 2015,
    ]
];      

// Route::get('post/', function() use($posts){
//     dd((int)request()->query('day'));
//     return view('post.index', ['posts' => $posts]);
// })->name('index.post');
// Route::get('/post/show{id}', function($id) use($posts){

//     abort_if(!isset($posts[$id]), 404);
//     return view('post.show', ['posts' => $posts[$id]]);
   
// })->name('posts.show');

// Route::get('/recent-post/{days?}', function($days = 12){
//     return "Blog post from ".$days." days ago";
// })->name('recent-posts.index');

Route::prefix('/fun')->name('fun.')->group(function() use($posts){

    Route::get('/response', function() use($posts){
    return response($posts, 203)
    ->header('Content-Type', 'application/json')
    ->cookie('MY_COOKIE', 'Yaqub JOE', 3600);
    });
    Route::get('/redirect', function(){
    return redirect()
    ->route('post.show', [1]);
    })->name('redirect.post');
    Route::get('/away', function(){
        return redirect()->away('https://jw.org');
    })->name('away.post');
    Route::get('/download', function(){
        return response()->download(public_path('/photo1.png'), 'virus.jpg');
    })->name('download.post');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
