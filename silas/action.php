<?php
include('woomy.php');

// Initialize Registration Process
if(isset($_POST ['registration'])) {
    //If Dumb Shit Is Done Codeblock
    // Check if username is blank / not set.
    if(!isset($_POST["frogname"]) || trim($_POST["frogname"]) == ""){
        redirect("register.php", "Enter Username.");
    }
    // Check if Password is blank / not set.
    if (!isset ($_POST["frogpwd"]) || trim ($_POST["frogpwd"]) == "") {
        redirect("register.php", "Enter password.");
    }
    //Check if Confirm Password is blank / not set.
    if (!isset ($_POST["frogpwdc"]) || trim ($_POST["frogpwdc"]) == "") {
        redirect ("register.php", "How are you this bad, are you xzoron");
    }
    // Check if Confirm Password is equal to password.
    if ($_POST["frogpwd"] != $_POST["frogpwdc"]) {
        redirect ("register.php", "Confirm is not equal to Password.");
    }
    // Check if Email is blank / not set.
    if (!isset ($_POST["frogmail"]) || trim ($_POST["frogmail"]) == "") {
        redirect ("register.php", "Enter Email.");
    }

    // Initalize Username Query
     // Grab the count of conflicting usernames from the database.
     $checkSu = $coon->prepare("SELECT COUNT(*) FROM users WHERE username = :name");
     // Bind the count to the variable.
        $checkSu->bindValue(":name", trim($_POST["frogname"]));
     // Run the statement.
     $checkSu->execute();
     // Bind the query to a variable to be checked
     $conflictCu = $checkSu->fetchColumn();


     // Check for conflicts.
     if (intval($conflictCu) >= 1) {
        redirect ("register.php", "Username is taken.");
    }
   
    // Initialize Email Query
     // Grab the count of conflicting emails from the database.
     $checkSe = $coon->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
     //Bind the count to the variable.
     $checkSe->bindValue(":email", trim($_POST["frogmail"]));
     // Run the statement.
     $checkSe->execute();
     // Bind the query to a variable to be checked.
     $conflictCe = $checkSe->fetchColumn();

     // Check for conflicts.
     if ($conflictCe >= 1){
         redirect ("register.php", "Email is taken.");
     }
    
    // Throw shit. 
     // Create throwing statement.
     $insertS = $coon->prepare("INSERT INTO users (username, password, email) VALUES (:name, :pwd, :email)");
     // Bind the values.
     $insertS->bindValue(":name", trim($_POST["frogname"]));
     $insertS->bindValue(":pwd" , sha1(trim($_POST["frogpwd"])));
     $insertS->bindValue(":email",trim($_POST["frogmail"]));
     // Run the statement.
     $insertS->execute();
     
// End Registration Process
    redirect("login.php");
}

// Initialize Login Process
if (isset($_POST['loggination'])) {

 // Check if username is blank / not set.
    if(!isset($_POST["frogname"]) || trim($_POST["frogname"]) == ""){
        redirect("login.php", "Enter Username.");
    }
 // Check if Password is blank / not set.
    if (!isset ($_POST["frogpwd"]) || trim ($_POST["frogpwd"]) == "") {
        redirect("login.php", "Enter password.");
    }
 // Check if username exists on the website.
    $loginSu = $coon->prepare("SELECT COUNT(*) FROM users WHERE username = :name");
    // Bind the values.
    $loginSu->bindValue(":name", trim($_POST["frogname"]));
    // Run the statement
    $loginSu->execute();
    // Bind the query to a variable to be checked.
    $conflictClu = $loginSu->fetchColumn();
    // Check if there is no username with the name submitted.
        if ($conflictClu <= 0){
            redirect("login.php", "Account does not exist.");
        }
 // Check if username matches with the password and create a session.
 $loginSs = $coon->prepare("SELECT * FROM users WHERE username = :name AND password = :pwd");
    // Bind the values.
    $loginSs->bindValue(":name", trim($_POST["frogname"]));
    $loginSs->bindValue(":pwd", sha1(trim($_POST["frogpwd"])));
    // Run the statement
    $loginSs->execute();
    // Bind queries to variable to be checked.
    $logSs = $loginSs->fetchAll(PDO::FETCH_BOTH);
   // Check if there are matches.
    if (count($logSs) >= 1){
        $_SESSION['user'] = $logSs[0]["id"];
        redirect ("accunt.php");
    } else {
        redirect("login.php", "Your Username or Password was incorrect.");
    }

}
  

























?>