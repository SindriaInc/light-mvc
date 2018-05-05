<?php
//index page
/*
 * TODO
 * Index e le altre View includeranno header e footer.(sistema extends)
 */

        include("components/header.php");

?>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php echo "App Think Open"?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="/login">Login</a>
            </div>
            <div class="col-md-6 text-center">
                <a href="/register">Register</a>
            </div>
        </div>
        


<?php


        include("components/footer.php");


?>
