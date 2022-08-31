<?php
    require 'db.php';

    if(isset($_POST['publish'])){
        $title = htmlspecialchars( $_POST['title']);
        // Prevent xss
        $content =  htmlspecialchars( $_POST['content']);


        // Redirection based on output
        if (insertDb($conn,$title,$content)){
            header("Location: success.php?success=1");
        }
        else{
            header("Location: success.php?success=0");
        }

    }
    
?>

    <?php
        require "header.php";
    ?>

    <body>

        <?php
            // include the navbar
            include 'navbar.php';

        ?>

        <div class="container">
            <form id="blog" name="blog" method="POST" action="">
                <div class="mainBlog">
                    <input type="text" placeholder="Enter the title" name="title" class="title" contenteditable="true" id="title"></input>

                    <div class="content">

                        <textarea name="content" class="blogContent" contenteditable="true"></textarea>

                    </div>
            </form>
            </div>
        </div>

        <!-- 
    <div class="fab" id="fab">
        <img src="./img/add_icon.png" alt="Add image icon">
    </div>

    <div class="fabBox tall" id="fabBox">
        <a id="insertImage" class="item item1"><img src="img/gallery-icon.png" alt=""></a>
        <a id="insertVideo" class="item item2"><img src="img/video-icon.png" alt=""></a>

    </div> -->



        <script src="js/index.js"></script>
        <script src="js/mce.js"></script>



    </body>

    </html>