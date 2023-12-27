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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    // return '<h1>hello text return</h1>';
    return view('hello');
});
Route::get('/hello2/{foo?}', function ($foo='bar') {
    return $foo;
});
Route::get('/hello3', ['as'=>'hello3', function () {
    return '<h1>this is hello3</h1>';
}]);
Route::get('/hello4', function () {
    return redirect(route('hello3'));
});


Route::get('/param', function () {
    $data = 'my name is paul';
    $data2 = 'my name is paul2';
    $data3 = 'my name is paul3';

    // return view('param', ['data'=>$data]);
    // return view('param', [
    //     'data'=>$data,
    //     'data2'=>$data2
    // ]);

    // return view('param')->with('data',$data);
    // return view('param')->with([
    //   'data'=>$data,
    //   'data3'=>$data3
    // ]);

    $view = view('param');
    $view->data2 = $data2;
    $view->data3 = $data3;
    return $view;
});
Route::get('/param2', function () {
    $dataList = [
      'apple',
      'banana',
      'tomato'
    ];
    return view('param', ['dataList'=>$dataList]);
});



Route::get('/layout', function () {
    return view('child');
});
