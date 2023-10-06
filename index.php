<?php

function SplitUrl(){
     $URL = $_GET('url')??'home';
     $URL = explode("/", $URL);
     return $URL;
}

function loadController(){
    $URL = SplitUrl();

    $filename = "/controllers/".ucfirst($URL[0]).".php";

    if(file_exists($filename)){
        require $filename;
    }
    else{

        $filename = "/controllers/notFound.php";
        require $filename;
    }
}

loadController();