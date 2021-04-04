<?php
//redirect header("Location: index.php");

global  $price;
global  $id;
global  $code;
global  $color;
global  $material;
global  $weight;
global  $name;
global  $gender;
global  $description;
global  $mainimage;

$connection;


function startConnection()
{
    $connection = mysqli_connect('localhost', 'root', '', 'userdb');

    //  $connection = mysqli_connect('localhost', 'root', '', 'userdb');
    if (mysqli_connect_errno()) {
        die('Database Not Connected.' . mysqli_connect_error());
    } else {
        //echo "Connected Databse.";
    }
}



//product items
function productShow()
{
    echo startConnection();

    //Global  Array variables
    $i = 0;

    /*   $query = "SELECT id,code,color,material,weight,name,gender,description,mainimage FROM productShow";
        $result = mysqli_query($this->connection, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id[$i] = $row['id'];
                $code[$i] = $row['code'];
                $color[$i] = $row['color'];
                $material[$i] = $row['material'];
                $weight[$i] = $row['weight'];
                $name[$i] = $row['name'];
                $gender[$i] = $row['gender'];
                $description[$i] = $row['description'];
                $mainimage[$i] = $row['image'];
                $price[$i] = $row['price'];
                $i++;
            }

            
        }*/

    $id[0] = "Hi";
    $price[0] = "Hi";
    $code[0] = "Hi";
    $color[0] = "Hi";
    $material[0] = "Hi";
    $weight[0] = "Hi";
    $name[0] = "Hi";
    $gender[0] = "Hi";
    $description[0] = "Hi";
    $mainimage[0] = "Hi";
}

//product sho images
function productImageShow($ProductCode)
{
    startConnection();

    //Global  Array variables
    global  $idimg;
    global  $productcode;
    global  $one;
    global  $two;
    global  $three;
    global  $four;

    global  $i;

    $query = "SELECT id,code,one,two,three,foue,gender FROM images WHERE code='$ProductCode' ";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $idimg[$i] = $row['id'];
            $productcode[$i] = $row['code'];
            $one[$i] = $row['one'];
            $two[$i] = $row['two'];
            $three[$i] = $row['three'];
            $four[$i] = $row['four'];

            $i++;
        }
    }

    closeConnection();
}


//Customer billing details
function billindAddressSave()
{

    if (isset($_POST['submit'])) {
        //catsh the data in post array
        $id = $_POST['NIC'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $company = $_POST['companyName'];
        $country = $_POST['country'];
        $lineOne = $_POST['addressLineOne'];
        $lineTwo = $_POST['addressLineTwo'];
        $postal = $_POST['postalCode'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];

        $price = $_POST['toatalPrice'];
        $shippingType = $_POST['shippingType'];
        $price = $_POST['toatalPrice'];
        $produnctArrayCodes = $_POST['shippingType'];
        $produnctCodes = $_POST['shippingType'];
        $isdel = 0;

        $query = "INSERT INTO billindAddress(id,firstName,lastName,companyName,country,addressLineOne,addressLineTwo,postalCode,city,province,telephone,email) Values('{$id}','{$firstName}','{$lastName}','{$company}','{$country}','{$lineOne}','{$lineTwo}','{$postal}','{$city}','{$province}','{$telephone}','{$email}')";
        $result = mysqli_query($connection, $query);
        if ($result) {
            echo "ADDED-to-Database";
        } else {
            echo "ADD-failed";
        }


        $query = "INSERT INTO customerOrders(code,quentity,date,companyName,country,addressLineOne,addressLineTwo,postalCode,city,province,telephone,email) Values('{$id}','{$firstName}','{$lastName}','{$company}','{$country}','{$lineOne}','{$lineTwo}','{$postal}','{$city}','{$province}','{$telephone}','{$email}')";
        $result = mysqli_query(
            $connection,
            $query
        );
        if ($result) {
            echo "ADDED-to-Database";
        } else {
            echo "ADD-failed";
        }
    } else {
        echo "NO-Data";
    }
}

function addToShopingCart()
{
    // Start the session
    session_start();

    if (isset($_POST['submit'])) {
        //catsh the data in post array
        $productCode = $_POST['productCode'];
        $productName = $_POST['productName'];
        $productImage = $_POST['productImage'];
        $quentity = $_POST['quentity'];
        $price = $_POST['price'];

        $item = array(
            "productCode" => $productCode,
            "productName" =>  $productName,
            "productImage" =>  $productImage,
            "quentity" =>  $quentity,
            "price" =>  $price
        );

        if (empty($_SESSION["Shoping_Cart"])) {
            $_SESSION["ShopingCart"] = array($productCode => $item);
        } else {
            $storeBeforeArray  =  $_SESSION["Shoping_Cart"];
            $newArray  =  array($productCode => $item);
            $_SESSION["Shoping_Cart"] = array_merge($storeBeforeArray, $newArray);
        }
    } else {
        echo "NO-Data";
    }
}

function viewShopingCart()
{
    session_start();

    global  $cartProductCode;
    global  $cartProductName;
    global  $cartProductPrice;
    global  $cartProductQuentinty;
    global  $cartProductimg;
    global  $cartProducTotaltPrice;


    if (isset($_SESSION["Shoping_Cart"])) {
        foreach ($_SESSION["Shoping_Cart"] as $key) {
            $i = 0;

            $cartProductCode[$i] = $key["productCode"][$i];
            $cartProductName[$i] = $key["productName"][$i];
            $cartProductPrice[$i] = $key["price"][$i];
            $cartProductQuentinty[$i] = $key["quentity"][$i];
            $cartProductimg[$i] = $key["productImage"][$i];

            $cartProducTotaltPrice += $cartProductPrice[$i];
            $i++;
        }
    }
}

function deleteShopingCart()
{
    session_start();

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "delete") {
            foreach ($_SESSION["Shoping_Cart"] as $keys => $values) {
                if ($values["item_id"] == $_GET["id"]) {
                    unset($_SESSION["Shoping_Cart"][$keys]);
                    echo '<script>alert("Item Removed")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }
}
