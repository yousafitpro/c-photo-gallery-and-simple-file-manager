Keep in mind this is only for laravel


Step-1 ( install composer using following command )

 
composer require yousafitpro/photo-library-and-simple-file-manager

Step-2 ( run mighrations using following command )


php artisan migrate


step-3 ( place this code on your page to show the Gallery )



{!! uc_lib_get_widget(auth()->id()) !!}




You can also add a Modal any where in your project

Example is here 


    {!! uc_lib_get_modal(auth()->id()) !!}
    <button data-toggle="modal" data-target="#uc_gallery_modal">Show Modal</button>


