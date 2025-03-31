<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Tutorial\TutorialController;
use Illuminate\Support\Facades\Route;

Route::namespace('Main')->name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
});

Route::namespace('Article')->name('article.')->group(function () {
    Route::get('/articles', [ArticleController::class, 'index'])->name('index');
    Route::get('/articles/{id}/show', [ArticleController::class, 'show'])->name('show');
});

Route::namespace('Tutorial')->name('tutorial.')->group(function () {
    Route::get('/tutorials', [TutorialController::class, 'index'])->name('index');
    Route::get('/tutorials/{id}/show', [TutorialController::class, 'show'])->name('show');
});
