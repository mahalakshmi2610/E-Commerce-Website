<?php
    //include header.php file
    include('header.php');
?>

<?php
    if (isset($_SESSION["userid"])) {

        $userid = $_SESSION["userid"];

        /*include products */
        include('Template/_products.php');
        /*include products */

        /*include top-sale */
        include('Template/_top-sale.php');
        /*include top-sale */
    }
    else{
        /*include products */
        include('Template/_general-products.php');
        /*include products */

        // /*include top-sale */
        // include('Template/_general-top-sale.php');
        // /*include top-sale */
    }
?>

<?php
    //include footer.php file
    include('footer.php');
?>
