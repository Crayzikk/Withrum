<?php

require "../database/connect.php";

$email = $_POST['email'];
$pswd = $_POST['pswd'];

if(!$email)
{
    echo'<script> alert("Enter the email!"); window.history.back(); </script>';
}
else if(!$pswd)
{
    echo'<script> alert("Enter the password!"); window.history.back(); </script>';
}
else if($connect)
{
     session_start();

     $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pswd' ");
    
     $nums = mysqli_num_rows($check_user);
     if (mysqli_num_rows($check_user) > 0)
     {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
            "username" => $user['username'],
        ];

        header("Location: http://localhost/Withrum/site-main/acc.html");
     }
     else
     {
        echo '<script> alert("This user does not exist!"); window.history.back(); </script>';
     }
}

?>