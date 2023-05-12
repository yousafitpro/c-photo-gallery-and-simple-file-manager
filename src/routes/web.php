<?php


Route::group([
    'namespace' => 'Yousafitpro\PhotoLibrary\Controllers',
    'prefix' => 'photo-library',
], function () {
    Route::get('', 'UcPhotoLibraryController@index');
});
