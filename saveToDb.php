<?php
    require_once "connection.php";

    
    if (isset($_POST['submit'])){
        $sname      =   mysqli_real_escape_string($conn, $_POST['name']);
        $address   =   mysqli_real_escape_string($conn, $_POST['email']);        
        $position   =   mysqli_real_escape_string($conn, $_POST['position']);
        $comment      =   mysqli_real_escape_string($conn, $_POST['comment']);
    
        if (empty($sname) || empty($address) || empty($position) || empty($comment)) 
        {
            echo 'please fill all fields';
            die();
        };


        $sql    =   "INSERT INTO subscriber(name, address, position, comment)
        VALUE(' $sname ', ' $address', '$position', '$comment')";

        if (mysqli_query($conn,$sql)){

            header("Location:message.php");

            echo "";
            exit;
            }else{
            echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
        };
    };
?>