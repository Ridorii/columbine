<?php 
include('woomy.php');

if (isset($_SESSION['user'])) {
    // Grab Tables
    $userinfoS = $coon->prepare('SELECT * FROM users WHERE id = :id');
    // Bind Values
    $userinfoS->bindValue(":id", $_SESSION['user']);
    // Execute 
    $userinfoS->execute();
    // let the doggy fetch
    $userinfo = $userinfoS->fetchAll(PDO::FETCH_BOTH);
    // print
    echo $userinfo[0]["id"];
    echo "<BR />";
    echo $userinfo[0]["username"];
    echo "<BR />";
    echo $userinfo[0]["email"];


} else {
    redirect("login.php","You are not logged in, fag.");
}



















?>