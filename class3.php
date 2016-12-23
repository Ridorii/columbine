<?php
// This lesson is on Forms. (Flashii.net.iou/scuttlesmug)
 
if(isset($_POST["frogname"])) {
    die("Frog name was ". $_POST["frogname"] ." with password ". $_POST["frogpwd"] . "Hacked By Mr T.");
}













?>
<html>
    <head>
        <title>Jesus Christ</title>
    </head>
    <body>
        <h1>Cool Frog Survey</h1>
        <hr />
        <form method="post" action="">
            Frog Name: <input type="textbox" name="frogname"  />
            <br />
            Frog Password: <input type="password" name="frogpwd"  />
            <br />
            <input type="submit" value="Touch This Frog" />
        </form>
    </body>
</html>