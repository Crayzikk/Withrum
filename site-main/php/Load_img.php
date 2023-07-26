<?php

    include "../database/connect.php";

    session_start();

    $user_id = $_SESSION['user']['id'];

    $path = 'img_users/'.time().$_FILES['avatar']['name'];

    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path))
    {
        echo '<script> alert("Помилка загрузки!"); window.history.back(); </script>';
    }
    else
    {
        mysqli_query($connect, "UPDATE `users` SET avatar = '$path' WHERE `id` = '$user_id'");
        $_SESSION['user']['avatar'] = $path;
    }

    echo '<script> window.history.back(); </script>';

?>