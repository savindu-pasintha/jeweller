<?php
header('Location: https://www.bitdegree.org');

if (isset($_POST["addtocart"])) {
    /* $_POST["productCode"] = "222";
    $_POST["productName"] = "pname";
    $_POST["productImage"] = "./img";
    $_POST["price"] = "20";
    $_POST["quentity"] = "30";
*/
    $product = array(
        "code" => $_POST["productCode"],
        "name" => $_POST["productName"],
        "image" => $_POST["productImage"],
        "price" => $_POST["price"],
        "quentity" => $_POST["quentity"]
    );
    if (!empty($_SESSION["cart"])) {
        $beforArray =  $_SESSION["cart"];
        $_SESSION["cart"] = array($_POST["productCode"] => $product);
        $_SESSION["cart"] = array_merge($_SESSION["cart"], $beforArray);
    } else {
        $_SESSION["cart"] = array($_POST["productCode"] => $product);
    }

    $_POST["productCode"] = "";
    $_POST["productName"] = "";
    $_POST["productImage"] = "";
    $_POST["price"] = "";
    $_POST["quentity"] = "";
} else {
    $_POST["productCode"] = "";
    $_POST["productName"] = "";
    $_POST["productImage"] = "";
    $_POST["price"] = "";
    $_POST["quentity"] = "";
}
