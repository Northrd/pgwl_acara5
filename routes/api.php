<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// GeoJSON API
Route::get('/points', [App\Http\Controllers\ApiController::class, 'geojson_points'])
    ->name('points.geojson');

Route::get('/point/{id}', [App\Http\Controllers\ApiController::class, 'geojson_point'])
    ->name('geojson.point');


Route::get('/polylines', [App\Http\Controllers\ApiController::class, 'geojson_polylines'])
    ->name('polylines.geojson');

Route::get('/polyline/{id}', [App\Http\Controllers\ApiController::class, 'geojson_polyline'])
    ->name('geojson.polyline');

Route::get('/polygons', [App\Http\Controllers\ApiController::class, 'geojson_polygons'])
    ->name('polygons.geojson');

Route::get('/polygon/{id}', [App\Http\Controllers\ApiController::class, 'geojson_polygon'])
    ->name('geojson.polygon');
