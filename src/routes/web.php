<?php


Route::group([
    'namespace' => 'yousafitpro\photo_library',
    'prefix' => 'photo-library',
], function () {
    Route::get('/test1', 'UserController@helloWorld');
});
