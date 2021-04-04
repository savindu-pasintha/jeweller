<?php

//if (isset($_POST["username"]) && isset($_POST["password"])) {
include('./Database-php/start-mysql-connection.php');
//$email = $_POST['email'];
//$pwd = $_POST['password'];
$sql = "SELECT * FROM register"; //WHERE email='$email' AND password='$password'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    $i = 0;
    $x = 0;
    while ($rowData = mysqli_fetch_assoc($result)) {
        if (isset($rowData)) {
            echo  $logid[$i] = $rowData['id'];
            $email[$i] = $rowData['email'];
            $password[$i] = $rowData['password'];
            /*  if (($email[$i] == $_POST["username"]) && ($password[$i] == $_POST["password"])) {
                    echo "record-added";
                    header("Location: http://localhost/AssignmentPhpSavinduPasintha/jewelerAspiration/");
                    exit;
                    break;
                }
            */
            $i++;
        }
    }
} else {
    echo "error";
    header("Location: http://localhost/AssignmentPhpSavinduPasintha/jewelerAspiration/ll");
    exit;
}
include('./Database-php/close-mysql-connection.php');
//}
