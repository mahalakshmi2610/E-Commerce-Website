<?php
    ob_start();
    //include header.php file
    include('header.php');
?>

<section class="signup-form text-center m-5 py-5">
    <h3 class="font-rubik py-3">Sign Up</h3>
    <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
            <input class="mt-3" type="text" name="name" placeholder="Full name..."><br>
            <input class="mt-3" type="password" name="pwd" placeholder="Password..."><br>
            <input class="mt-3" type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
            <button class="mt-3 color-primary-bg text-light" type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <?php

    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:#019270; padding-top:10px;'>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "invaliduname"){
            echo "<p style='color:#019270; padding-top:10px;'>Choose a proper Username!</p>";
        }
        else if($_GET["error"] == "pwddontmatch"){
            echo "<p style='color:#019270; padding-top:10px;'>Passwords don't match!</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p style='color:#019270; padding-top:10px;'>Something went wrong, try again!</p>";
        }
        else if($_GET["error"] == "unametaken"){
            echo "<p style='color:#019270; padding-top:10px;'>Username already taken!</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p style='color:#019270; padding-top:10px;'>You have signed up!</p>";
        }
    }

    ?>
</section>


