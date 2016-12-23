<?php

// Initialize Session
session_start();

// Initialize Database Connection
$coon = new PDO("mysql:host=localhost;dbname=woomy", "root", "");


// Create Redirection Codeblock
function redirect($location, $msg = "") {
    if(trim($msg) != "") {
        header("Location: ". $location ."?msg=". $msg); 
    } else {
        header("Location: ". $location);
    }

    exit;
}