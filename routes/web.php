<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    $user = User::first();

    $user->notify(new App\Notifications\RealTimeNotification('Hello World! I am a notification 😄'));

    return view('welcome');
});

Route::get('test', function(){
    event(new App\Events\RealTimeMessage('Hello World! I am an event 😄'));
});
