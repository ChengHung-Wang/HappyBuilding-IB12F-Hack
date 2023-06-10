<?php
$conn = new PDO("mysql:host=127.0.0.1;dbname=ntust_ctf;charset=utf8","root","");
$g = $_GET;
$p = $_POST;
$c = $_COOKIE;
function q($cmd){
    global $conn;
    return $conn->query($cmd);
}
function f($cmd){
    return q($cmd)->fetchAll(PDO::FETCH_ASSOC);
}

function debug($data){
    echo json_encode($data,JSON_PRETTY_PRINT);
}

function login_err() {
    echo "<script>alert('登入失敗'); </script>";
}

//debug(cuser());
// debug(action_plan(1));
// debug(action_plans(2));