<?php
   
    namespace yousafitpro\photo_library;
    use Illuminate\Support\ServiceProvider;
    class UcPhotoLibraryServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
        public function register()
        {

      }
   }
?>