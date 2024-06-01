<?php
    ob_start();
    //include header.php file
    include('header.php');
?>

<?php


    if(isset($_SESSION["username"])){
      echo "<p style='text-align:center; padding:5px; font-size:16px; color:'>Hello there " . $_SESSION["username"] . "</p>";
    }
    if (isset($_SESSION["userid"])) {
        // Display personalized content based on the user being logged in
        $userid = $_SESSION["userid"];
        // Fetch and display user-specific data like their cart items

        /*include banner-area */
        include('Template/_banner-area.php');
        /*include banner-area */
    
         /*include top-sale */
         include('Template/_top-sale.php');
         /*include top-sale */
    
         /*include special-price */
         include('Template/_special-price.php');
         /*include special-price */

    } else {
        // Display general content for users who are not logged in
        // List products without user-specific data
        
        /*include banner-area */
        include('Template/_banner-area.php');
        /*include banner-area */
        
         /*include top-sale */
         include('Template/_general-top-sale.php');
         /*include top-sale */
    
         /*include special-price */
         include('Template/_general-special-price.php');
         /*include special-price */
    }
    
    

?>

<?php
    //include footer.php file
    include('footer.php');
?>