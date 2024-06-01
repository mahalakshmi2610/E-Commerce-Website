<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if(emptyInputSignup($name, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUsername($name) !== false){
        header("location: ../signup.php?error=invaliduname");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=pwddontmatch");
        exit();
    }
    if(unameExists($conn, $name) !== false){
        header("location: ../signup.php?error=unametaken");
        exit();
    }

    createUser($conn, $name, $pwd);

}
else{
    header("location: ../signup.php");
    exit();
}