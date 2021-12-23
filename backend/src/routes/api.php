<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* 404 ответ если не верный урл API */
Route::pattern('path', '[a-zA-Z0-9-/]+');
Route::any('{path}', function( $page ) {
	return response()->json([
		 'status' => 'failed',
	  ], "404");
});

