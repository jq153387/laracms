<?php
// // Guard routes for pages
Route::prefix('api/{guard}/page')->group(function () {
    Route::resource('page', 'PageAPIController');
});
//Guard routes for pages
Route::prefix('/api')->group(function () {
    Route::resource('page', 'PageAPIController');
    Route::get('/pagelist', 'PagePublicController@Pageslist');
});
// Public routes for pages
Route::get('/{slug}.html', 'PagePublicController@getPage');
