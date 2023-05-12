<?php


Route::prefix('Gallery')
    ->middleware(['auth','admin'])
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\GalleryController::class, 'index'])->name('uc_gallery.index');
        Route::post('/upload_file', [\App\Http\Controllers\GalleryController::class, 'upload_file'])->name('uc_gallery.upload_file');
        Route::get('/gallery-widget', [\App\Http\Controllers\GalleryController::class, 'gallery_widget'])->name('uc_gallery.gallery_widget');
        Route::get('/gallery-delete-file/{id}', [\App\Http\Controllers\GalleryController::class, 'gallery_delete_file'])->name('uc_gallery.gallery_delete_file');
        Route::get('/gallery-widget-search', [\App\Http\Controllers\GalleryController::class, 'gallery_widget_search'])->name('uc_gallery.gallery_widget_search');
///adasd
    });

//asdasd