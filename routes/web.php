<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/', [SellerController::class, 'showSellers'] );// show the list of sellers
Route::get('/create', [SellerController::class, 'createSeller'] );// go into create seller page
Route::post('/update', [SellerController::class, 'updateSeller'] );// go into update seller page
Route::post('/seller/{seller}/update', [SellerController::class, 'update'] );// update seller info in the db, redirect into '/', pass in param seller id
Route::post('/seller/store', [SellerController::class, 'store'] );// create new seller in the database, redirect to '/' after created
Route::post('/seller/{seller}/delete', [SellerController::class, 'delete'] );// create new seller in the database, redirect to '/' after created