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

use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', 'MyController@index');

Route::get('/add', function () {
    App\User::create([
        'email' => 'long@gmail.com',
        'password' => Hash::make('123'),
        'name' => 'Nguyen Ma Phi Long'
    ]);
});

Route::get('/update', function () {
    $user = App\User::find(101);
    $user->email = 'philong@gmail.com';
    $user->save();
});

Route::get('/find', function () {
    $data = App\User::all()->find(2)->phone()->get()->toArray();
    echo dd($data);
});

Route::post('/show/{$id}', 'MyController@store');