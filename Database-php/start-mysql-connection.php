<?php
$connection = mysqli_connect('localhost', 'root', '', 'jewelary');

try {
    if (mysqli_connect_errno()) {
        die('Database Not Connected.' . mysqli_connect_error());
    } else {
        //echo "Connected Databse.";
    }
} catch (Exception $e) {
    echo " ";
}

// echo include('start-mysql-connection.php');
