<?php
    ob_start();
    //include header.php file
    include('header.php');
?>

<?php

    /*include cart */
    include('Template/_cart-template.php');
    /*include cart */

    /*include top-sale */
    include('Template/_top-sale.php');
    /*include top-sale */

?>

<?php
    //include footer.php file
    include('footer.php');
?>