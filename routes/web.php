<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

//Route::view('/', 'welcome');

Route::view('/', '404error');

Route::get('portfolio/{slug}', function ($slug){
    $users = User::with('skill')->with('aboutme')->with('education')->with('workexperience')->with('blog')->with('contactme')->where('slug', $slug)->first();
    //dd($users);
    if($users){
    return view('portfolio')->with('users', $users);
    }else{
        return view('404error');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');