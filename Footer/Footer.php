<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <style>
        .footer_area {
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
            border-top: 2px solid #e5e5e5;
            padding: 100px 0 50px;

        }

        .footer_area .single_footer_area .footer-logo {
            font-size: 45px;
            font-weight: bolder;
            font-family: 'Kaushan Script', cursive;
            letter-spacing: 5px;
            color: #ff084e;
            transition-duration: 1s;

        }

        .footer_area .single_footer_area .footer-logo:hover {
            font-size: 45px;
            font-weight: bolder;
            font-family: 'Kaushan Script', cursive;
            letter-spacing: 5px;
            color: black;

        }

        .footer_content>p {
            font-size: 14px;
        }

        .footer_content>p:first-child {
            margin-bottom: 30px;
        }

        .footer_social_area>a {
            display: inline-block;
            font-size: 26px;
            padding: 0 30px;
            color: black;
        }

        .footer_social_area>a:hover {
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
            color: #ff084e;
        }

        .footer_widget_menu a {
            display: block;
            font-size: 14px;
            margin-bottom: 10px;
            text-transform: capitalize;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            font-weight: 600;
            color: blue;
        }

        .footer_widget_menu a:hover {
            margin-left: 5px;
            color: black;
        }

        .footer_widget_menu a i {
            padding-right: 5px;
        }

        .subscribtion_form {
            position: relative;
            z-index: 1;
        }

        .subscribtion_form .mail {
            border: none;
            border-radius: 0;
            font-size: 12px;
            height: 50px;
            padding: 5px 15px;
            width: 100%;
            background-color: #f0eded;
            color: #929191;
            font-style: italic;
        }

        .subscribtion_form .submit {
            background-color: #3a3a3a;
            border: none;
            border-radius: 0;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            height: 50px;
            position: absolute;
            right: 0;
            text-transform: uppercase;
            top: 0;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            padding: 0 30px;
            font-weight: 700;
        }

        .subscribtion_form .submit:hover {
            background-color: #ff084e;
            color: #fff;
        }

        .copywrite_text>p {
            color: #9f9f9f;
            font-size: 14px;
            margin-top: 30px;
            display: block;
            color: black;
        }
    </style>
</head>


<body>
    <section>
        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <h1>JEWELLER</h1>
                            </div>

                            <div class="copywrite_text d-flex align-items-center">
                                <p>

                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">savinduPasintha</a> &amp; distributed by <a href="#" target="_blank">JEWELLER</a>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input placeholder="savindupasingtha@gmail.com" type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>

                                    <div style="width:100%; height:100px; padding:10px;">
                                        <textarea style="width:100%; height:100px;" placeholder="Message type..." name="message" cols="42" rows="3"></textarea>
                                    </div>
                                    </br>
                                </form>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </section>
</body>

</html>