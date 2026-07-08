<?php

spl_autoload_register(function($class){

    $class = str_replace("App\\","",$class);

    $path = "app/".str_replace("\\","/",$class).".php";

    if(file_exists($path)){

        require $path;

    }

});

?>