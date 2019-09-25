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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

Route::get('/', function () {
    return view('contents.status');
});

Route::get('/login', function () {
    return view('contents.login');
});

Route::get('/registration', function () {
    return view('contents.registration');
});

Route::post('/registration', function(Request $request) {
    $user = new User();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->name = $request->name;
    $user->bio = 'test';
    $user->photo = 'test';
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect('/login');

    // $user = User::create([
    //     'username' => $request->username,
    //     'email' => $request->email,
    //     'name' => $request->name,
    //     'password' => Hash::make($request->username),
    // ]);
});