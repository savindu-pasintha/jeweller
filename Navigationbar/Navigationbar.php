<?php
//delete cart items
if (isset($_GET["deleteCart"])) {
    if (!empty($_GET["deleteCart"])) {
        $deleteItem = $_GET["deleteCart"];
        if (!empty($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $keys => $values) {
                if ($deleteItem == $keys) {
                    unset($_SESSION["cart"]["$deleteItem"]);
                }
            }
        }
    }

    header("Refresh:0; url=index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <style>
        body,
        .container {
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: white;
            color: black;
        }

        #title {
            font-family: 'Josefin Slab', serif;
            padding-top: 5%;
            padding-left: 0;
            padding-right: 0;
        }

        #title h1 {
            text-decoration: underline;
            text-decoration-color: black;
            font-weight: bolder;
            color: red;
            text-align: right;
        }

        #titleicon {
            justify-content: right;
            text-align: right;
        }

        #titleicon a i {
            font-size: 15px;
            color: black;
            padding: 15px;
            opacity: 0.8;
        }

        #titleicon a .fa-bars {
            font-size: 45px;

        }

        #titleicon a .fa-shopping-bag:hover {
            font-size: 18px;
            cursor: pointer;

        }

        /**------------------- */
        #headingicons {
            justify-content: left;
        }

        #headingicons a i {
            font-size: 15px;
            color: black;
            padding: 10px;
            opacity: 0.8;
        }

        #headingicons a i:hover {
            font-size: 22px;
            color: blue;

            opacity: 1;
        }

        /**------------------- */
        ul li {
            list-style: none;
            width: 100%;
        }

        /**------------------- */
        #menuitems {
            display: flex;
            float: right;
        }

        #menuitems li {
            padding: 15px;
            width: auto;
        }

        #menuitems li h1 {
            font-size: 15px;
            color: black;
            font-weight: bold;
            opacity: 1;


        }

        #menuitems li h1:hover {
            font-size: 16px;
            color: black;
            font-weight: bold;
            opacity: 1;
            cursor: pointer;
        }

        /**------------------- */
        #box,
        .container-fluid {
            max-width: 100%;

            padding: 0;
            margin: 0;
        }

        #box h1 {
            font-size: 22px;
        }

        #box1 {
            background-color: gray;
            color: white;
            width: 100%;
            height: 150px;
        }

        #box2 {
            background-color: #ff084e;
            color: white;
            width: 100%;
            height: 150px;
        }

        #box3 {
            background-color: black;
            color: white;
            width: 100%;
            height: 150px;
        }

        /**------------------- */
        @media screen and (max-width:1000px) {
            #menuitems {
                width: 100%;
                height: auto;
            }

            #box {
                width: 100%;
                height: auto;
            }
        }

        @media screen and (max-width:25%) {
            #box {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <section id="sectnav">
        <div class="container-fluid ">
            <div class="row">
                <div id="title" class="col-sm-12 col-md-6">
                    <h1>JEWELLER</h1> </br>
                </div>

                <!-- Drop down menu total value calculation and session variables read -->
                <?php
                $sum = 0;
                if (isset($_SESSION["cart"])) {

                    foreach ($_SESSION["cart"] as $keys => $values) {
                        if (!empty($values["quentity"]) && !empty($values["quentity"])) {
                            $t = $values["quentity"] * $values["price"];
                            $sum = $t + $sum;
                        }
                    }
                }
                ?>
                <div id="titleicon" class="col-sm-12 col-md-6">
                    <div class="dropstart p-5">
                        <a class="dropdown-toggle btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                            <i class="fa fa-shopping-bag "></i>
                            Your Bag $ <?php echo $sum; ?>
                        </a>
                        <span class="caret"></span></button>

                        <div style="width:410px; height:auto;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class="d-md-flex">
                                <div class="overflow-auto bg-light" style="width:410px; height:300px;">
                                    <ul>
                                        <li class="dropdown-item">
                                            <div class="text-center">
                                                <?php
                                                echo '<h3 class="font-weight-bold">Total $ ' . $sum . ' </h3>';
                                                ?>
                                            </div>
                                        </li>
                                        <?php
                                        $x = 0;
                                        if (isset($_SESSION["cart"])) {
                                            foreach ($_SESSION["cart"] as $keys => $values) {
                                                if (
                                                    !empty($values["quentity"]) && !empty($values["quentity"]) &&
                                                    !empty($values["code"]) && !empty($values["name"] &&
                                                        !empty($values["price"]) && !empty($values["image"]))
                                                ) {
                                        ?>
                                                    <li class="dropdown-item">
                                                        <div class="d-block">
                                                            <div class="d-flex flex-row">

                                                                <div class="p-2 ">
                                                                    <p> <?php echo $x;
                                                                        ?> : </p>
                                                                </div>
                                                                <div class="p-2 col-3">
                                                                    <img class="" style="width:50px; height:50px; " src="<?php echo $values["image"]; ?>" alt="First slide">
                                                                </div>
                                                                <div class="p-2">
                                                                    <p>
                                                                        <span style="width:250px;  height:auto;"><?php echo $values["name"]; ?></span>
                                                                        <span style="width:75px;  height:auto;"><?php echo $values["price"]; ?>$ </span> <span> X </span>
                                                                        <span style="width:75px;  height:auto;"> <?php echo $values["quentity"]; ?></span>
                                                                    </p>
                                                                </div>
                                                                <div class=" p-2">
                                                                    <form method="GET" action="">
                                                                        <button style="color: inherit; border:none; background: none; " type="submit" name="deleteCart" value="<?php echo $values["code"]; ?>">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>
                                        <?php

                                                }
                                                $x++;
                                            }
                                        }
                                        ?>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--
                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            ?php include("./ShopingBag/ShopingBag.php"); ?>
                        </div>
                            
                        -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-col-md-12 ">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div id="headingicons">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope-open" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa " aria-hidden="true">+94 76 875 5787</i></a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 ">
                            <ul id="menuitems">
                                <li>
                                    <h1><a style=" text-decoration:none; color:black;" href="#homesec">HOME</a></h1>
                                </li>

                                <li>
                                    <form method="POST" action="">
                                        <button style="color: inherit; border:none; background: none; " type="submit" name="type" name="type" value="<?php echo $type = "necklesse"; ?>">
                                            <h1><a style=" text-decoration:none; color:black;">NECLESSE </a></h1>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form method="POST" action="">
                                        <button style="color: inherit; border:none; background: none; " type="submit" name="type" name="type" value="<?php echo $type = "bracelet"; ?>">
                                            <h1><a style=" text-decoration:none; color:black;">BRACELET</a></h1>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form method="POST" action="">
                                        <button style="color: inherit; border:none; background: none; " type="submit" name="type" name="type" value="<?php echo $type = "ring"; ?>">
                                            <h1><a style=" text-decoration:none; color:black;">RING</a></h1>

                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form method="POST" action="">
                                        <button style="color: inherit; border:none; background: none; " type="submit" name="type" name="type" value="<?php echo $type = "earing"; ?>">
                                            <h1><a style=" text-decoration:none; color:black;">EARING</a></h1>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <h1><a style=" text-decoration:none; color:black;" href="#paysec">PAYMENT</a></h1>
                                </li>
                                <li>
                                    <h1><a style=" text-decoration:none; color:black;" href="#contactsec">CONTACT</a></h1>
                                </li>
                                <li>
                                    <h1><a style=" text-decoration:none; color:black;" href="#Aboutsec">ABOUT</a></h1>
                                </li>
                                <li>
                                    <h1 id="logouttext"><a style=" text-decoration:none; color:black;" href="#Aboutsec">LOGOUT</a></h1>
                                </li>
                                <li>
                                    <h1 id="logintext" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenterLogin">LOGIN</h1>
                                </li>
                                <li>
                                    <h1 type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenterRegistration"><?php if (!empty($_COOKIE["regemail"])) {
                                                                                                                                    echo $r = "REGISTRED";
                                                                                                                                } else {
                                                                                                                                    echo "REGISTRATION";
                                                                                                                                } ?></h1>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>


    <!-- Modals Login-registrations -->
    <div class="modal fade" id="exampleModalCenterLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <?php include("./Login/Login.php"); ?>
        <!--   Modal -->
    </div>

    <!-- Modals Login-registrations -->
    <div class="modal fade" id="exampleModalCenterRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <?php include("./Registration/Registration.php"); ?>
    </div>

    <section id="box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 text-center ">
                    <div id="box1">
                        <marquee scrollamount="5" width="100%" direction="up" height="100%">
                            <h1 class="text-center">Free Shipping & Return</h1>
                            <p class="text-center">BUY NOW</p>
                        </marquee>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 text-center">
                    <div id="box2">
                        <marquee scrollamount="3" width="100%" direction="right" height="100%">
                            <h1 class="text-center pt-5">20% Discount for all Jewellers</h1>
                            <p class="text-center">use code:898885</p>
                        </marquee>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 text-center">
                    <div id="box3">
                        <marquee scrollamount="1" width="100%" direction="down" height="100%">
                            <h1 class="text-center">Get free Coupon Now !</h1>
                        </marquee>
                    </div>
                </div>
            </div>
    </section>
    <section style="width:100%; height:50px;"></section>
</body>
<script type="text/javascript">
    function delete() {
        var quentity = document.getElementById("qty").value;
        var code = document.getElementById("productCode").value;
        var name = document.getElementById("productName").value;
        var image = document.getElementById("productImage").value;
        var price = document.getElementById("price").value;
        console.log(quentity + code + image);
        var cartArr = ['name' = name, 'code' = code, 'price' = price, 'quentity' = quentity, 'image' = image];
        setCookie("saveTocartCookie", cartArr, 1);
    }
</script>

</html>