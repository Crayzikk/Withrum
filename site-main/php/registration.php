<?php

    require "../database/connect.php";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $pswd = $_POST['pswd'];
    $repeat_pswd = $_POST['repeat_pswd'];

    if(!$email)
    {
        echo'<script> alert("Enter the email!"); window.history.back(); </script>';
    }
    else if(!$username)
    {
        echo'<script> alert("Enter the username!"); window.history.back(); </script>';
    }
    else if(strlen($username) > 30)
    {
        echo'<script> alert("Enter a short name! (No more than 30 characters)"); window.history.back(); </script>';
    }
    else if(!$pswd)
    {
        echo'<script> alert("Enter the password!"); window.history.back(); </script>';
    }
    else if(strlen($pswd) < 5 || strlen($pswd) > 10)
    {
        echo'<script> alert("Your password must be between 5 and 10 characters"); window.history.back(); </script>';
    }
    else if (!$repeat_pswd)
    {
        echo'<script> alert("Repeat the password!"); window.history.back(); </script>';
    }
    else if($repeat_pswd != $pswd)
    {
        echo'<script> alert("Passwords do not match"); window.history.back(); </script>';
    }
    else if($connect)
    {
        mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `username`, `password`) 
            VALUES (NULL, '$email', '$username', '$pswd')");
        
        header("Location: http://localhost/Withrum/site-main/autohorized_users/acc.php");
    }

?>