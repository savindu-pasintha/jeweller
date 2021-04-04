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
function productShowAfterFilter($type)
{
    startConnection();

    //Global  Array variables
    $i = 0;

    $query = "SELECT * FROM productShow WHERE type='.$type.' ";
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
    }

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
