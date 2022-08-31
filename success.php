<?php
    $publishHide = true;
    // Include the header
    include 'header.php';
?>

<body>
    <?php include 'navbar.php' ?>

<div class="container">


    <?php
        if (isset($_GET['success']) and $_GET['success'] == 1){
           echo  "<div class=\"alert w-75 m-auto mt-5 alert-success\" role=\"alert\">
            Your Blog has been successfully submited
            </div> ";
        }
        else{
            echo  "<div class=\"alert w-75 m-auto mt-5 alert-danger\" role=\"alert\">
            Some Error has occureed
            </dev>";
            
        }
    ?>
</div>


</body>