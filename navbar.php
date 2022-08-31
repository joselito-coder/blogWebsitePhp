<!-- Structure of the website -->
<nav class="navbar">
    <div class="navLeftContainer">
        <img src="./img/medium-seeklogo.com.svg" alt="blog logo" class="navLogo">


    <?php echo ($publishHide)? "" : '<p class="username">Draft in Babukoder</p>'  ?>


    </div>
    <div class="navRightContainer">
        <button name="publish" type="submit" form="blog" class="<?php echo ($publishHide)? "d-none ": ""; ?>btn btnPublish">publish</button>
        <i class="tripleDots"></i>
        <!-- logo bellicon -->
        <i class="navIcons fa-solid fa-bell"></i>
        <i class="navIcons fa-solid fa-user"></i>

        <img src="https://cdn-images-1.medium.com/fit/c/32/32/0*E-Z3kVF2NMR6SCZ6" alt="user logo" class="userLogo">

    </div>
</nav>