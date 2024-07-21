<?php
session_start();

function show($stuffs){
    echo "<pre>";
    print_r($stuffs);
    echo "</pre>";
}
$URL = $_GET['url'] ?? "Home";
$URL= explode("/",$URL);
show($URL);