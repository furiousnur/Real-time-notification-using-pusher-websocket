<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', function () {
    $users = \App\Models\User::all();
    event(new \App\Event\TaskEvent($users));
});


Route::get('test', function () {
//    dd(event(new App\Events\StatusLiked('Someone')));
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/notify', [App\Http\Controllers\NotificationController::class, 'notify'])->name('notify');
Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'notification'])->name('notification');
Route::get('/users', [App\Http\Controllers\NotificationController::class, 'index'])->name('users');
Route::view('/notification', 'welcome');
