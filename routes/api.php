<?php

use App\Http\Controllers\WebhookController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/healthcheck', function (): JsonResponse {
    return new JsonResponse(['status' => 'ok']);
});

Route::post('/webhook', WebhookController::class);