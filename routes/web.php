<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/',[StoryController::class,'index'])->name('story');
Route::get('/playstory',[StoryController::class,'playStory'])->name('playstory');
Route::get('/list-story',[StoryController::class,'showListStory'])->name('liststory');
Route::get('/gameLink',[StoryController::class,'gameLink'])->name('gamelink');

require __DIR__.'/auth.php';
