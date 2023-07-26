<?php

    include "../database/connect.php";

    session_start();

    $id = $_SESSION['user']['id'];
    
    if(isset($id)) 
    {
        mysqli_query($connect,"DELETE FROM `users` WHERE `id` = '$id'");
    }

    session_unset();
    session_destroy();

    header("Location: http://localhost/Withrum/site-main/");
?>