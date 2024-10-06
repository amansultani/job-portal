<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('' , fn() => to_route('jobs.index'));

Route::resource("jobs",JobController::class)->only(["index","show"]);

Route::get('login' , fn() => to_route('auth.create'))->name('login'); // we created this because of no logins will route to login based on laravel default behaviour which is configured in Authenticate.php
Route::resource("auth", AuthController::class)->only(["create",'store']);
route::delete('logout' , fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy' ])->name('auth.destroy');