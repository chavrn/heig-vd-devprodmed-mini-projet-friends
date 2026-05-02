<?php

use App\Http\Controllers\Api\v1\ApiPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\EpisodeRatingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//crée les routes
Route::apiResource('v1/posts', ApiPostController::class)
    ->middlewareFor(['index', 'show'], ['auth:sanctum', 'abilities:posts:read'])
    ->middlewareFor(['store'], ['auth:sanctum', 'abilities:posts:create'])
    ->middlewareFor(['update'], ['auth:sanctum', 'abilities:posts:update'])
    ->middlewareFor(['destroy'], ['auth:sanctum', 'abilities:posts:delete']);

//toute route commence par /v1/ + auth obligatoire
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {

    //crée une note
    Route::post(
        'episodes/{episode}/ratings',
        [EpisodeRatingController::class, 'store']
    )->middleware('abilities:ratings:create');

    //modif et supprimer
    Route::put(
        'ratings/{rating}',
        [EpisodeRatingController::class, 'update']
    )->middleware('abilities:ratings:update');

    Route::delete(
        'ratings/{rating}',
        [EpisodeRatingController::class, 'destroy']
    )->middleware('abilities:ratings:delete');

});

