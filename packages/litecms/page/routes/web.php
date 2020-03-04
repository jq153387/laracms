<?php
// Guard routes for pages
Route::prefix('{guard}/page')->group(function () {
    Route::resource('page', 'PageResourceController');
    Route::get('/dest', 'PageResourceController@update');
});
// Public routes for pages by category default
Route::get('/{slug}.html', 'PagePublicController@getPage');
// public routes for pages by category news
Route::get('/news/{slug}.html', 'PagePublicController@getPageNews');
Route::get('/news', 'PagePublicController@getNewsList');


// Route::get('/test', function(){
//     return Litecms\Page\Models\Page::all();
// });
// Route::get('/test', function(){
//     return App\Page::all();
// });
if (Trans::isMultilingual()) {
    Route::group(
        [
            'prefix' => '{trans}',
            'where'  => ['trans' => Trans::keys('|')],
        ],
        function () {
            // Guard routes for pages
            Route::prefix('{guard}/page')->group(function () {
                Route::resource('page', 'PageResourceController');
            });
            // Public routes for pages
            Route::get('/{slug}.html', 'PagePublicController@getPage');
        }
    );
}
