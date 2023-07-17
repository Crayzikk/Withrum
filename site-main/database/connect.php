<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'withrum');
    if (!$connect)
    {
        die('Error connect to database');
    }
?>