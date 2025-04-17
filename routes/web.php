<?php

use Illuminate\Support\Facades\Route;

// userAI - user
use App\Http\Controllers\UserAI\SearchController;
use App\Http\Controllers\UserAI\HomeController;
use App\Http\Controllers\UserAI\ProfileController;
use App\Http\Controllers\UserAI\PromptsController;
use App\Http\Controllers\UserAI\PromptSpaceController;
use App\Http\Controllers\UserAI\TagController;
// SAdmin
use App\Http\Controllers\SAdmin\ProfileSAController;
use App\Http\Controllers\SAdmin\ToolsController;
use App\Http\Controllers\SAdmin\UserController;
use App\Http\Controllers\UserAI\DeleteUserPrompt;
use App\Http\Controllers\UserAI\FavoriteController; 
use App\Http\Controllers\UserAI\UsersController;

Route::get('/', function () {
    return redirect('login');
});
Route::get('/promptsHome', function () {
    return view('site.promptsHome');
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
    Route::get('tool/show/{id}', [ToolsController::class, 'show'])->name('tools.show');
});
// SAdmin
Route::group(['middleware' => 'superadmin'], function () {   
    Route::resource('tools', ToolsController::class);
    Route::resource('users', UserController::class);
    Route::get('/profileSA', [ProfileSAController::class, 'edit'])->name('profileSA.edit');
    Route::patch('/profileSA', [ProfileSAController::class, 'update'])->name('profileSA.update');
});

require __DIR__ . '/auth.php';
