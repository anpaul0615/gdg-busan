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
  $view = view('hello');
  $view->data = "This is data";
  $view->dataList = [
    "This is datalist 1",
    "This is datalist 2",
    "This is datalist 3",
  ];
  return $view;
});



Route::get('/hello/insert', function () {
  // $result = DB::insert('INSERT INTO Persons DEFAULT VALUES');
  $result = DB::table('Persons')->insert([
    'name'=>'Guestttt'
  ]); // insert default 지원 안함, [] 전달시 아무동작안하고 true 전달함
  $data = $result? 'insert \'Guestttt\' success..!' : 'fail..!';

  $view = view('hello');
  $view->data = $data;
  return $view;
});
Route::get('/hello/insert/paul', function () {
  // $result = DB::insert('INSERT INTO Persons(name, age) VALUES(?, ?)', ['Paul An', 27]);
  $result = DB::table('Persons')->insert([
    'name' => 'Paul An',
    'age' => 27
  ]);
  $data = $result? 'insert paul success..!' : 'fail..!';

  $view = view('hello');
  $view->data = $data;
  return $view;
});



Route::get('/hello/select', function () {
  // $result = DB::select("SELECT name FROM Persons");
  $result = DB::table('Persons')->get();
  $data = gettype($result);
  $dataList = $result;

  $view = view('hello');
  $view->data = $data;
  $view->dataList = $dataList;
  return $view;
});
Route::get('/hello/select/paul', function () {
  // $result = DB::select("SELECT name FROM Persons WHERE name LIKE '%Paul%' ");
  $result = DB::table('Persons')->select('name')->where('name', 'LIKE', '%Paul%')->get();
  $data = gettype($result);
  $dataList = $result;

  $view = view('hello');
  $view->data = $data;
  $view->dataList = $dataList;
  return $view;
});
