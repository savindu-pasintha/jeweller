<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /**------------------- */
        ul li {
            list-style: none;
            width: 100%;
        }

        /** ---------------- */
        #ttle,
        #ttle .row {
            width: 100%;
            height: auto;
        }

        #ttle h1 {
            text-align: center;
            justify-content: center;
            font-size: 45px;
            font-weight: bolder;
            letter-spacing: 5px;
            padding-top: 105px;
        }

        /**------------------ */
        #headings {
            display: flex;
            justify-content: center;
            width: 100%;
            padding-top: 60px;
        }

        #headings li {
            width: 100%;
            justify-content: center;
            text-align: center;
        }

        #headings li h1 {
            font-size: 15px;
            color: grey;
            font-weight: bold;
            opacity: 1;
            width: 100%;
            justify-content: center;
        }

        #headings li h1:hover {
            font-size: 16px;
            color: black;
            font-weight: bold;
            opacity: 1;
            cursor: pointer;
        }

        /**-------------------------- */
        .product-description {
            width: 100%;
            height: 250px;
            background-color: none;
            color: black;
            text-align: left;
            padding-top: 15px;
            font-size: 15px;
            border: 0px solid grey;
        }

        .product-description .product-details {
            width: 100%;
            text-align: center;
            font-size: 17px;
            font-weight: bolder;
            color: black;
        }

        .product-description .product-details span:hover {
            cursor: pointer;
            font-size: 19px;
        }

        .product-description .paragraph {
            width: 100%;
            text-align: center;
            font-size: 15px;
        }

        #btncart {
            width: 100%;
            height: 60px;
            color: black;
            text-align: center;
            padding-top: 15px;
        }

        #btncart a {
            font-weight: bolder;
            color: black;
            text-align: center;
            border-radius: 5px;
            border: 1px solid black;
            padding: 10px;

            text-decoration: none;
        }

        #btncart a:hover {
            font-weight: bolder;
            color: black;
            text-align: center;
            border: 0 solid black;
            font-size: 17px;
            opacity: 0.9;
            background-color: rgba(161, 231, 15, 100);
        }

        /**--------------------------- */
        .img img {
            width: 100%;
            height: 100%;
            padding: 50px;
            transition: transform 2.5s;
            /* Animation */
        }

        .img img:hover {
            transform: scale(1.08);
            padding: 0;
            /* Animation */
        }

        .single_gallery_item .img {
            width: 100%;
            height: 250px;
        }

        /**-------------------------------- */
    </style>


</head>

<body>
    <section>
        <div id="ttle" class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <h1> NEW ARRIVALS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <ul id="headings">
                    <li>
                        <form method="GET" action="">
                            <input type="hidden" name="type" value="<?php echo $type = "all"; ?>" />

                            <button type="submit" style="color: inherit; border:none; background: none; ">
                                <h1> ALL </h1>
                            </button>

                        </form>
                    </li>
                    <li>
                        <form method="GET" action="">
                            <input type="hidden" name="type" value="<?php echo $type = "women"; ?>" />
                            <button type="submit" style="color: inherit; border:none; background: none; ">
                                <h1> WOMEN </h1>
                            </button>

                        </form>
                    </li>
                    <li>
                        <form method="GET" action="">
                            <input type="hidden" name="type" value="<?php echo $type = "men"; ?>" />

                            <button type="submit" style="color: inherit; border:none; background: none; ">
                                <h1> MEN</h1>
                            </button>

                        </form>
                    </li>
                    <li>
                        <form method="GET" action="">
                            <input type="hidden" name="type" value="<?php echo $type = "kids"; ?>" />

                            <button type="submit" style="color: inherit; border:none; background: none; ">
                                <h1> KIDS </h1>
                            </button>

                        </form>
                    </li>

                </ul>
            </div>
        </div>
        <div style="width:100%; height:70px;"></div>
    </section>

    <section>
        <!-- Single gallery Item Start -->
        <div class="row">
            <?php

            include('./Database-php/start-mysql-connection.php');

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
            global  $quentity;
            global  $i;

            //clicked to filter buttons
            if (isset($_POST["type"])) {
                $type = $_POST["type"];
                if ($type == "all") {
                    $query = 'SELECT * FROM productshow ';
                }
                if ($type == "men") {
                    $type = "mail";
                    $query = 'SELECT * FROM productshow WHERE gender ="' . $type . '" ';
                }
                if ($type == "women") {
                    $type = "femail";
                    $query = 'SELECT * FROM productshow WHERE gender ="' . $type . '" ';
                }
                if ($type == "kids") {
                    $type = "kids";
                    $query = 'SELECT * FROM productshow WHERE gender ="' . $type . '" ';
                }
                if ($type == "earing") {
                    $type = "earing";
                    $query = 'SELECT * FROM productshow WHERE type ="' . $type . '" ';
                }
                if ($type == "ring") {
                    $type = "ring";
                    $query = 'SELECT * FROM productshow WHERE type ="' . $type . '" ';
                }
                if ($type == "bracelet") {
                    $type = "bracelet";
                    $query = 'SELECT * FROM productshow WHERE type ="' . $type . '" ';
                }
                if ($type == "necklesse") {
                    $type = "necklesse";
                    $query = 'SELECT * FROM productshow WHERE type ="' . $type . '" ';
                }
            } else {
                $query = 'SELECT * FROM productshow ';
            }

            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) > 0) {
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    if (isset($row)) {
                        $id[$i] = $row['id'];
                        $code[$i] = $row['code'];
                        $color[$i] = $row['color'];
                        $material[$i] = $row['material'];
                        $weight[$i] = $row['weight'];
                        $name[$i] = $row['name'];
                        $gender[$i] = $row['gender'];
                        $description[$i] = $row['description'];
                        $mainimage[$i] = $row['mainimage'];
                        $price[$i] = $row['price'];
                        $quentity[$i] = $row['quentity'];
                        $i++;
                    }
                    // echo print_r($row);
                }
            } else {
                //samhara welawata product nathi wenn puluwan databse eke
                $query = 'SELECT * FROM productshow ';
                $result = mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if (isset($row)) {
                            $id[$i] = $row['id'];
                            $code[$i] = $row['code'];
                            $color[$i] = $row['color'];
                            $material[$i] = $row['material'];
                            $weight[$i] = $row['weight'];
                            $name[$i] = $row['name'];
                            $gender[$i] = $row['gender'];
                            $description[$i] = $row['description'];
                            $mainimage[$i] = $row['mainimage'];
                            $price[$i] = $row['price'];
                            $quentity[$i] = $row['quentity'];
                            $i++;
                        }
                        // echo print_r($row);
                    }
                }
            }

            // $c = 0;
            $c = count($id); //ength of array
            //  echo print_r($id);
            for ($i = 0; $i < $c; $i++) {
                if (!empty($price[$i]) && !empty($mainimage[$i]) && !empty($code[$i])  && !empty($name[$i])) {
            ?>
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <div class="img">
                                <img src="<?php echo $mainimage[$i]; ?>" width="100%" height="auto" alt="">
                            </div>
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <p class="product-details">
                                <span>$<?php echo $price[$i];  ?></span> |
                                <span><?php echo $color[$i]; ?></span> |
                                <span><?php echo $name[$i];  ?></span> |
                                <span><?php echo $material[$i];  ?></span> |
                                <span><?php echo $weight[$i];  ?></span>
                                <span><?php //echo $gender[$i];   
                                        ?></span>
                                <span><?php //echo $code[$i];     
                                        ?></span>
                            </p>
                            <p style="height:100px" class="paragraph"><?php echo $description[$i]; ?> </p>

                            <div id="btncart">
                                <a type="button" onclick="fun(
                            '<?php echo $name[$i]; ?>'
                            ,'<?php echo $price[$i]; ?>'
                            , '<?php echo $color[$i]; ?>'
                            ,'<?php echo $weight[$i]; ?>'
                            ,'<?php echo $code[$i]; ?>'
                            ,'<?php echo $material[$i]; ?>'
                            ,'<?php echo $description[$i]; ?>'
                            ,'<?php echo $gender[$i] ?>' 
                            ,'<?php echo $mainimage[$i]; ?>'
                            ,'<?php echo $quentity[$i]; ?>'
                            );" data-bs-toggle="modal" data-bs-target="#exampleModalCenterView" class="add-to-cart-btn">
                                    ADD TO CART
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalCenterView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <?php include("./ProductAdd/ProductAdd.php");   //id="clickCartbtn"  ./ProductAdd/ProductAdd.php  
                        ?>
                    </div>

            <?php
                }
            }
            include('./Database-php/close-mysql-connection.php');
            ?>
        </div>


    </section>
</body>
<script type="text/javascript">
    function fun(name, price, color, weight, code, material, description, gender, mainimage, quentity) {
        // var n = document.getElementById("name").value;
        //  console.log(name + price + color + weight + code + material + description + gender + mainimage + quentity);
        setCookie("name", name, 1);
        setCookie("price", price, 1);
        setCookie("color", color, 1);
        setCookie("weight", weight, 1);
        setCookie("code", code, 1);
        setCookie("material", material, 1);
        setCookie("description", description, 1);
        setCookie("gender", gender, 1);
        setCookie("mainimage", mainimage, 1);
        setCookie("quentity", quentity, 1);
        // data to be sent to the POST request
        //  location.reload();
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + ";path=/";
        //  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
</script>

</html>