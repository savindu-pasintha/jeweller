<?php

if (isset($_POST["addtocart"])) {

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

    //header("Refresh:0; url=index.php");
} else {
    $_POST["productCode"] = "";
    $_POST["productName"] = "";
    $_POST["productImage"] = "";
    $_POST["price"] = "";
    $_POST["quentity"] = "";
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

</head>


<style>
    .single_product_thumb {
        margin-bottom: 100px;
        width: 100%;
        height: auto;
    }

    .single_product_thumb .carousel-indicators {
        bottom: -86px;
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left;
        left: 0;
        margin: 0;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
    }

    .single_product_thumb .carousel-indicators li {
        background-position: center center;
        background-size: cover;
        height: 80px;
        width: 25%;
    }

    .single_product_thumb .carousel-inner {
        border: 1px solid #ddd;
        margin: 0 3px;
        width: calc(100% - 6px);
    }

    .single_product_thumb .carousel-indicators li.active {
        border: 1px solid #ddd;
    }

    .single_product_thumb .product_badge {
        top: 30px;
    }

    .single_product_desc {
        position: relative;
        z-index: 1;
    }

    .single_product_desc .title {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .single_product_desc .price {
        margin-bottom: 15px;
    }

    .single_product_desc .available {
        margin-bottom: 15px;
        font-size: 12px;
    }

    .single_product_desc form {
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .single_product_desc .single_product_ratings i {
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .single_product_desc .single_product_ratings i {
        color: #ff9800;
        font-size: 14px;
    }

    .single_product_desc .single_product_ratings span {
        font-size: 13px;
    }

    .single_product_desc .single_product_desc .price {
        font-size: 18px;
    }

    .single_product_desc .short_overview>h6 {
        font-size: 14px;
    }

    .single_product_desc .short_overview>p {
        color: #888;
        font-size: 14px;
        font-weight: 300;
    }

    .single_product_desc .custom-control {
        margin-right: 0;
    }

    .single_product_desc .widget.size .widget-desc a {
        font-size: 12px;
        padding: 0;
        width: 37px;
        height: 37px;
        border: 2px solid #3a3a3a;
        font-weight: 700;
        text-align: center;
        line-height: 33px;
    }

    .single_product_desc .widget.size .widget-desc a:hover,
    .single_product_desc .widget.size .widget-desc a:focus {
        border: 2px solid #ff084e;
        background-color: #ff084e;
    }

    .single_product_desc .widget.size {
        border-bottom: none;
        padding-bottom: 0;
    }

    .single_product_desc .cart .qty-text {
        border: 1px solid #ddd;
        height: 40px;
        padding: 5px 15px;
        width: 140px;
        -moz-appearance: textfield;
        -webkit-appearance: textfield;
        appearance: textfield;
        font-size: 14px;
    }

    .single_product_desc .cart .quantity {
        display: inline-block;
        float: left;
        position: relative;
        z-index: 1;
    }

    .single_product_desc .cart .qty-minus,
    .single_product_desc .cart .qty-plus {
        background-color: #fff;
        border: 1px solid #ddd;
        display: block;
        height: 20px;
        position: absolute;
        right: 0;
        text-align: center;
        top: 0;
        width: 30px;
        z-index: 99;
        cursor: pointer;
        font-size: 10px;
        line-height: 20px;
        color: #888;
    }

    .single_product_desc .cart .qty-plus {
        top: auto;
        bottom: 0;
    }

    .single_product_desc .cart .cart-submit {
        background-color: #ff084e;
        border: medium none;
        color: #fff;
        font-size: 14px;
        height: 40px;
        margin-left: 15px;
        text-transform: uppercase;
        width: 150px;
        cursor: pointer;
        border-radius: 0;
    }

    .single_product_desc .card-header {
        padding: 30px 15px;
        margin-bottom: 0;
        background-color: transparent;
        border-bottom: 2px solid #ebebeb;
    }

    .single_product_desc .card-header h6 a {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .single_product_desc .card-body p {
        font-size: 14px;
        color: #9f9f9f;
    }

    .single_product_desc .card {
        border: none;
        padding-top: 5%;
    }

    .single_product_desc .card:first-child {
        border-top: 2px solid #ebebeb;
        border-bottom: none;
        border-left: none;
        border-radius: 0;
        border-right: none;
    }

    .modal-backdrop.show {
        display: none !important;
    }

    .modal-content {
        box-shadow: 1px 10px 30px rgba(0, 0, 0, 0.15);
        border: 1px solid #ebebeb;
    }

    #product_details_slider .carousel-inner .carousel-item .gallery_img img {
        width: 100%;
        height: 500px;
    }

    /**-------------------------------- */
</style>

<body>
    <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->


    <!-- Modal -->
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">



        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <section class="single_product_details_area section_padding_0_100">


                    <div class="container">
                        <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="single_product_thumb">
                                    <div id="product_details_slider" class="carousel slide" data-bs-ride="carousel">

                                        <ol class="carousel-indicators">
                                            <!-- <li class="active" data-bs-target="#product_details_slider" data-bs-slide-to="0" style="background-image: url(./Images/carlos-esteves-1MWbwTaeJIA-unsplash.jpg);">
                                            </li> -->
                                            <li class="active" data-bs-target="#product_details_slider" data-bs-slide-to="0" style="background-image: url(<?php echo $_COOKIE["mainimage"]; ?>);">
                                            </li>
                                            <li data-bs-target="#product_details_slider" data-bs-slide-to="1" style="background-image: url(<?php echo $_COOKIE["mainimage"]; ?>);">
                                            </li>
                                            <li data-bs-target="#product_details_slider" data-bs-slide-to="2" style="background-image: url(<?php echo $_COOKIE["mainimage"]; ?>);">
                                            </li>
                                            <li data-bs-target="#product_details_slider" data-bs-slide-to="3" style="background-image: url(<?php echo $_COOKIE["mainimage"]; ?>);">
                                            </li>
                                        </ol>

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <a class="gallery_img" href="Images/carlos-esteves-1MWbwTaeJIA-unsplash.jpg">
                                                    <img class="d-block w-100" src=" <?php echo $_COOKIE["mainimage"]; ?>" alt="First slide">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a class="gallery_img" href="Images/carlos-esteves-1MWbwTaeJIA-unsplash.jpg">
                                                    <img class="d-block w-100" src=" <?php echo $_COOKIE["mainimage"]; ?>" alt="Second slide">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a class="gallery_img" href="<?php echo $_COOKIE["mainimage"]; ?>">
                                                    <img class="d-block w-100" src=" <?php echo $_COOKIE["mainimage"]; ?>" alt="Third slide">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a class="gallery_img" href="<?php echo $_COOKIE["mainimage"]; ?>">
                                                    <img class="d-block w-100" src=" <?php echo $_COOKIE["mainimage"]; ?>" alt="Fourth slide">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="single_product_desc">
                                    <h4 class="title"><a><?php echo $_COOKIE["name"]; ?></a></h4>
                                    <h4 class="price">$ <?php echo $_COOKIE["price"]; ?></h4>

                                    <p class="available">Available: <?php echo $_COOKIE["quentity"]; ?> <span class="text-muted">In Stock</span></p>

                                    <div class="single_product_ratings mb-15">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>

                                    <!-- Add to Cart Form -->
                                    <form method="post" action="" class="cart clearfix mb-50 d-flex">
                                        <div class="quantity">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <input name="quentity" type="number" class="qty-text" id="qty" step="1" min="1" max="12" value="1">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( (!isNaN( qty )) && (qty != 0) && (0<qty)) { effect.value--;} return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                        </div>
                                        <input id="productCode" type="hidden" name="productCode" value="<?php echo $_COOKIE["code"]; ?>" />
                                        <input id="productName" type="hidden" name="productName" value="<?php echo $_COOKIE["name"]; ?>" />
                                        <input id="productImage" type="hidden" name="productImage" value="<?php echo $_COOKIE["mainimage"]; ?>" />
                                        <input id="price" type="hidden" name="price" value="<?php echo $_COOKIE["price"]; ?>" />
                                        <button onclick="<?php echo include("./method.php"); ?>" type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button>

                                    </form>
                                    <!-- end Form -->

                                    <!-- Add to Cart Form -->
                                    <div id="accordion" role="tablist">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h6 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                                                </h6>
                                            </div>

                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p> <?php echo $_COOKIE["description"]; ?></p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </section>

            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    function saveTocart() {
        var quentity = document.getElementById("qty").value;
        var code = document.getElementById("productCode").value;
        var name = document.getElementById("productName").value;
        var image = document.getElementById("productImage").value;
        var price = document.getElementById("price").value;
        console.log(quentity + code + image);
        var cartArr = ['name' = name, 'code' = code, 'price' = price, 'quentity' = quentity, 'image' = image];
        // cartArr.push("Kiwi");
        setCookie("saveTocartCookie", cartArr, 1);
    }

    /**function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + ";path=/";
        //  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        echo '<script> alert("  No data ");
    }*/
</script>


</html>