<?php

    include "../database/connect.php";
    session_start();

    $edit_name = $_POST['edit_name'];
    $id = $_SESSION['user']['id'];
    
    mysqli_query($connect, "UPDATE `users` SET username = '$edit_name' WHERE `id` = '$id'");

    $_SESSION['user']['username'] = $edit_name;
    
    echo'<script> window.history.back(); </script>';
?>