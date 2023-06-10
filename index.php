<?php
require_once dirname(__FILE__) . '/router.php';
require_once dirname(__FILE__) . '/no_php.php';

$fake_extension = "aspx";
$deny_extension = "php";

$router = new router();

$router->all("/", function() {
    echo file_get_contents("./home.html");
});

$router->all("/{file}.$deny_extension", function($file) use ($router) {
    $router->trigger404();
});

$router->all("{file}." . $fake_extension, function($file) use ($router) {
    $file .= ".php";
    if (file_exists("./" . $file)) {
        if ($file === "index.php") {
            echo file_get_contents("./home.html");
            return;
        }
        include_once dirname(__FILE__) . "/" . $file;
    }else {
        $router->trigger404();
    }
});


$router->mount("/api/v1", function() {

});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    // ... do something special here
    die(file_get_contents("./404.html"));
});

$router->run();
