<?php

// Requires Function composer's autoload
if (file_exists('function/vendor/autoload.php')) 
{
    require('function/vendor/autoload.php');
}

$response = (new App\Handler())->handle();
echo $response;
