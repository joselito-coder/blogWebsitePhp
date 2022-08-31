<?php

    $username = 'TheFieldsRequireSomeTweaking';
    $password = 'EnterYourOwnPasswordHere';
    $server = 'localhost';
    $database = 'blog';

// $conn = mysqli_connect("")
    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    // echo "Connected to the database";

    function insertDb($conn,$title,$content){

        // Sql query template
        $sql = "INSERT into blog(`title`,`content`) values (?,?)";

        // initialize statement
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt,$sql)){
            echo "SQl statement failed";
        }
        else{
            // bind params
            mysqli_stmt_bind_param($stmt,'ss',$title,$content);
            // execute the query
            return mysqli_stmt_execute($stmt);
            

        }





    }

?>
