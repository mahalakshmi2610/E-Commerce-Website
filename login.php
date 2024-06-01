<?php
    ob_start();
    //include header.php file
    include('header.php');
?>

<section class="signup-form text-center m-5 py-5">
    <h2 class="font-rubik py-3">Login</h2>
    <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
            <input class="mt-3" type="text" name="name" placeholder="UserName..."><br>
            <input class="mt-3" type="password" name="pwd" placeholder="Password..."><br>
            <button class="mt-3 color-primary-bg text-light" type="submit" name="submit">Login</button><br>
            <p class="mt-3">Don't have an account?<a href="signup.php">Register</a></p>  
        </form>
    </div>
    <?php

    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:#019270; padding-top:10px;'>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p style='color:#019270; padding-top:10px;'>Incorrect Login Information!</p>";
        }
    }
    ?>
</section>
