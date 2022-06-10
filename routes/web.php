<?php

use Illuminate\Support\Facades\Route;



//入力ページ
Route::get('/contact', [ContactController::class, 'cantact.index']);
//確認ページ
Route::post('/contact/confirm', [ContactController::class, 'cantact.confirm']);
//送信完了ページ
Route::post('/contact/thanks', [ContactController::class, 'cantact.send']);