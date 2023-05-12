Keep in mind this is only for laravel


Step-1 ( install composer using following command )

 
composer require yousafitpro/photo-library-and-simple-file-manager

Step-2 ( run mighrations using following command )


php artisan migrate


step-3 ( place this code on your page to show the Gallery )

{!! uc_lib_get_widget(auth()->id()) !!}





