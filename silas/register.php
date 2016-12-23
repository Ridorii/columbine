<?php

















?>
<html>
    <head>
        <title>The Bee Movie But Every Time They Say Bee Its Replaced With Godverdomme</title>
    </head>
    <body>
    <h1> Registration to Columbinii.net </h1>
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
    <hr />
    Password : <input type = "password"  name = "frogpwd" />
    <hr />    
    Confirm Pass: <input type = "password" name = "frogpwdc" />
    <hr />
    Email    : <input type = "textbox" name = "frogmail" />
    <hr />
    <input type = "submit" value = "Register" name = "registration" />
    </form>
    </body>
</html>


