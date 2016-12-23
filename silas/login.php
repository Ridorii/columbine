<?php






?>
<html>
    <head>
    <title> Holy Fuck Something Works </title>
    </head>
        <body> 
        <h1> Login to Columbinii.net </h1>
        <?php
    if(isset($_GET["msg"])) {
    ?>
    <h2> 
        <?php echo $_GET["msg"] ?>
    </h2> 
    <?php
    }
    ?>
    <hr />
    <form method = "post" action = "action.php">
    Username : <input type = "textbox" name = "frogname" />
    <br />
    Password : <input type = "password" name = "frogpwd" />
    <br />
    <input type = "submit" value = "Login" name = "loggination" />
    </form> 
     </body>
</html>