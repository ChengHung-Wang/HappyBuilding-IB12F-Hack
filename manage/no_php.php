<?php
if (count(explode("php", $_SERVER['REQUEST_URI'])) > 1) {
    http_response_code(404);
    die(file_get_contents("../404.html"));
}
