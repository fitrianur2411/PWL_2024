<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Praktikum1
//Langkah 2
Route::get('/hello', function () { 
return 'Hello World'; 
}); 

//Langkah 4
Route::get('/world', function () { 
    return 'World'; 
    });

//Langkah 6
Route::get('/', function () { 
    return 'Selamat Datang!'; 
}); 

//Langkah 7
Route::get('/about', function () { 
    return 'NIM 2241760004 adalah Fitria Nur Sholikah'; 
}); 

//Langkah 8
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
});

//Langkah 11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

//Langkah 13
Route::get('/articles/{id}', function ($Id) { 
    return 'Halaman Artikel dengan ID : '.$Id; 
}); 

//Langkah 14
Route::get('/user/{name?}', function ($name=null) { 
    return 'Nama saya '.$name; 
}); 

//Langkah 17
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});

//Praktikum 2
Route::get('/hello', [WelcomeController::class,'hello']);

/*Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles', [ArticleController::class,'articles']);*/

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class); 

Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
    ]); 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
    ]); 

//Praktikum 3
Route::get('/greeting', function () { 
    return view('hello', ['name' => 'Fitria']); 
});

Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Fitria']); 
}); 

Route::get('/greeting', [WelcomeController::class, 'greeting']);

