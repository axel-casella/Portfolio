<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\EducationController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkexperienceController;

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

Route::view('/', 'welcome');

//Route::view('/', '404error');

Route::get('portfolio/{slug}', function ($slug){
    $users = User::with('skill')->with('aboutme')->with('education')->with('workexperience')->with('blog')->with('contactme')->where('slug', $slug)->first();
    //dd($users);
    if($users){
    return view('portfolio')->with('users', $users);
    }else{
        return view('welcome');
    }
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('user', UserController::class)->except([
        'show'
    ]);
    
    Route::resource('skill', SkillController::class)->except([
        'show'
    ]);

    Route::resource('aboutme', AboutMeController::class)->except([
        'show'
    ]);

    Route::resource('education', EducationController::class)->except([
        'show'
    ]);

    Route::resource('experience', WorkexperienceController::class)->except([
        'show'
    ]);
});