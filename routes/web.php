<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoCtrlr;
use App\Http\Controllers\SingleActionCtrl;
use App\Http\Controllers\ResoPhotoCtrl;
use App\Http\Controllers\FormCtrl;
use App\Http\Controllers\MytableCtrl;
use App\models\Mytable;

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




Route::get('/demo/{name?}', function  ($name=null){
    $check="<h2>this is checking html tag decoding</h2>";
    $data=compact('name','check');
    
    return( view ('demo')->with($data));
});

Route:: get('/demo2', function (){
    return view('demo2');
});

// Route::get('/',[DemoCtrlr::class, 'myfn']);        //basic controller

Route:: get('/demo3', SingleActionCtrl::class);   //single action controller

Route:: resource("/reso",ResoPhotoCtrl::class);    //resource controller




// from submitting route

Route:: get('/form', [FormCtrl::class, 'formFn']); 

Route:: post('/form',[FormCtrl::class, 'reg']);

// Route::get('/mytable',function(){
//     $mytableData =Mytable::all();
//     echo "<pre>";
//     print_r($mytableData->toarray());
// });

Route::get('/mytable/create',[MytableCtrl::class, 'tabget'])-> name('mytable.create');
Route::post('/mytable',[MytableCtrl::class, 'tabpost']);

Route::get('/mytable',[MytableCtrl::class, 'view']);

Route::get('/mytable/delete/{id}',[MytableCtrl::class, 'delete'])->name('mytable.delete');

Route::get('/mytable/edit/{id}',[MytableCtrl::class, 'edit'])->name('mytable.edit');

Route::get('/mytable/update/{id}',[MytableCtrl::class, 'update'])->name('mytable.update');

// for home page
Route::get('/', function(){
    return view('index');
});