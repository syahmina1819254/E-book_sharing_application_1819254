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



use App\Http\Controllers\BookController;
Route::get('/about',[BookController::class,'about']);
Route::get('/list',[BookController::class,'list']);




/*
Route::get('/', function () {
    return view ('welcome');
});

*/

/*
Route::get('/', function () {
    return ('This is a cat');
});
*/

/*
1b
*/

/*
Route::get('/cat', function () {
    return ('This is a cat');
});
*/

/*
1c
*/
/*
Route::get('/cat/morecats', function () {
    return ('This is a cat');
});
*/

/*
1d
*/

/*
2a
*/
/*
Route::get('/{catname}/{id}', function ($catname,$id) {
    return ('This is ' . $catname . ' and the id is ' . $id);
});
*/

/*
Route::get('/cat', function () {
    return view ('about');
});
*/

/*
2b
Route::get('/cat', function () {
    return view ('Layout/about');
});
*/
/*
Route::get('/{name}/{id}', function ($name,$id) {
    return view('welcome')->with('name',$name)->('id',$id);
});
*/
/*
Route::get('/{name}/{id}' , function($name,$id){
    return view('welcome')->with('name',$name)->with('id',$id);
});
*/
/*
Route::get('/{name}' , function($name){
    return view('welcome', ['name'=>$name]);
});
*/
/*
Route::get('/{name}/{id}/{task}' , function($name,$id,$task){
    return view('welcome', 
                ['name'=>$name,
                'id'=>$id,
                'task'=>$task
    ]);
});
*/
/*
use App\Http\Controllers\PageController;
Route::get('/', [PageController::class,'home']);


use App\Http\Controllers\PageController;
Route::get('/home',[PageController::class,'home']);
Route::get('/contacts',[PageController::class,'contacts']);
Route::get('/about',[PageController::class,'about']);

use App\Http\Controllers\catController;
Route::get('/',[Catcontroller::class,'index']);

Route::get('/{catname}', function ($catname) {
    return view ('index');
});
*/




