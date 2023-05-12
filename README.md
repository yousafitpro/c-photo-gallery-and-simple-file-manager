Keep in mind this is only for laravel ( PHP )


Step-1 ( install composer using following command )

 
composer require yousafitpro/photo-library-and-simple-file-manager

Step-2 ( run mighrations using following command )


php artisan migrate


step-3 ( place this code on your page to show the Gallery )



{!! uc_lib_get_widget(auth()->id()) !!}

![image](https://github.com/yousafitpro/c-photo-library-and-simple-file-manager/assets/77118786/3100f7fb-6a61-4fc6-9536-9f2c948eb3c6)
![image](https://github.com/yousafitpro/c-photo-library-and-simple-file-manager/assets/77118786/d18ffd04-93d2-4db5-b95c-2a2ee329a665)




You can also add a Modal any where in your project

Example is here 


    {!! uc_lib_get_modal(auth()->id()) !!}
    <button data-toggle="modal" data-target="#uc_gallery_modal">Show Modal</button>


