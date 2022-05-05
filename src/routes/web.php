<?php

use Illuminate\Support\Facades\Route;
use Laravia\Tweety\App\Http\Controllers\TweetyController;

Route::get('/laravia/tweety', [TweetyController::class, 'home'])->name('laravia.tweety::home')->middleware(['web', 'auth']);
