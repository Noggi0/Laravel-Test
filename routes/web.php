<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

Route::get('/points', function() {
    $response = DB::select("SELECT * FROM example_app.points");
    return json_encode($response, JSON_PRETTY_PRINT);
});

Route::post('/points', function(Request $request) {
    $id = $request->input('point.id');
    $value = $request->input('point.value');
    $time = $request->input('point.time');
    $conso_prod = $request->input('point.conso_prod');
    $result = DB::insert('INSERT INTO example_app.points (id, value, time, conso_prod) VALUES (?, ?, ?, ?)', [$id, $value, $time, $conso_prod]);
    return $result;
});

Route::get('/', function () {
    return view('welcome');
});
