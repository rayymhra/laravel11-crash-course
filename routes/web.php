<?php
// fungsi:
// kalo kita ngakses alamat tertentu aksi apa yg akan dijalakan

use App\Http\Controllers\hi\halooController; //kalo pake extensions bakal otomatis dibikinin
use App\Http\Controllers\todo\todoController;
use Illuminate\Support\Facades\Route;

// route / yg diakses blade welcome yg letaknya di resources->view
Route::get('/', function () {
    return view('welcome');
});


// route /hai yg ngakses halo.blade.php yg ada di dalem folder coba yg letaknya di resources->view
Route::get('/hai', function () {
    return view('coba.halo');
});


// route /hi ngakses halooController 
Route::get('/hi', [halooController::class, 'index']);



// route ke todo
// Route::get('/todo', function(){
//     return view('todo.app');
// });

//route ke todo tapi view nya ada di controller
Route::get('/todo', [todoController::class, 'index']);

Route::post('/todo', [todoController::class, 'store']);