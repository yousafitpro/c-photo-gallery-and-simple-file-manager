<?php


if (! function_exists('uc_lib_get_widget')) {
    function  uc_lib_get_widget() {
        ///asdasdsdasdas
       return view('UcPhotoLib::widget');
    }
}

if (! function_exists('uc_lib_get_modal')) {
    function  uc_lib_get_modal() {
        ///asdasdsdasdas
       return view('UcPhotoLib::gallery_modal');
    }
}
if ( ! function_exists('app_encrypt')){
    function app_encrypt($number)
    {
        return ($number * 91378264);
    }
}
if ( ! function_exists('app_decrypt')){
    function app_decrypt($number)
    {
        return ($number / 91378264);
    }
}
//asdasd