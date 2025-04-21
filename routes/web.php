<?php

use Illuminate\Support\Facades\Route;

// userAI - user
use App\Http\Controllers\UserAI\SearchController;
use App\Http\Controllers\UserAI\HomeController;
use App\Http\Controllers\UserAI\ProfileController;
use App\Http\Controllers\UserAI\PromptsController;
use App\Http\Controllers\UserAI\PromptSpaceController;
use App\Http\Controllers\UserAI\TagController;

// Admin
use App\Http\Controllers\Admin\ActionsController;
use App\Http\Controllers\Admin\ManagementsController;
use App\Http\Controllers\Admin\UserController; 
use App\Http\Controllers\Admin\PlanningController;

 


Route::get('/', function () {
    return redirect('login');
});
 

// userAI - user
Route::group(['middleware' => 'userAI'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home.index');
    Route::get('show/{id}', [HomeController::class, 'show'])->name('show.index');
    Route::resource('search', SearchController::class);
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('prompts', PromptsController::class);
    Route::resource('prompt-spaces', PromptSpaceController::class);    
    Route::resource('tags', TagController::class);    
    Route::resource('favorites', FavoriteController::class);
    Route::resource('users', UsersController::class);    
    Route::delete('/user-delete/{id}', 'FavoriteController@destroy')->name('user.delete');
    
});

// Admin
Route::group(['middleware' => 'superadmin'], function () {   
    Route::resource('managements', ManagementsController::class);
    Route::resource('actions', ActionsController::class);
    Route::resource('planning', PlanningController::class);
    Route::resource('tools', ToolsController::class);
    Route::resource('users', UserController::class);

});

require __DIR__ . '/auth.php';
