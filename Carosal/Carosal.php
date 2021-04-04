<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <style>
        body {
            padding: 0;
            margin: 0;
        }

        section img {
            width: 100%;
            height: auto;
        }

        #carouselExampleIndicators img {
            width: 100%;
            height: 850px;
            transition: transform .9s;
        }

        #carouselExampleIndicators img:hover {
            transform: scale(0.75);
            /* Animation */
        }

        /**--------------------------- */
        #carouselExampleIndicators,
        .d-block,
        .w-100 {
            padding: 0;
            margin: 0;
        }

        /**------------------------ */

        #button {
            width: 250px;
            height: 60px;
            background-color: transparent;
            color: white;
            font-size: 12px;
            border: 2px solid white;

        }

        #button:hover {
            width: 250px;
            height: 60px;
            background-color: black;

            color: white;
            font-size: 12px;
            border: 2px solid white;
            cursor: pointer;
            opacity: 0.7;
        }


        /**-------------------------------------- */
        #carouselExampleIndicators #caption {
            position: absolute;
            z-index: 5;
            cursor: pointer;
            width: 100%;
            height: auto;
            padding: 0;
            top: 0;
            color: white;
            overflow: hidden;
            padding-top: 25%;
            justify-content: center;
            text-align: center;
        }



        #carouselExampleIndicators #caption h1 {
            font-size: 90px;
            font-weight: bolder;
            padding: 0;

        }


        #carouselExampleIndicators #caption h1 :hover {
            font-size: 80px;
            font-weight: bolder;

        }

        #carouselExampleIndicators #caption button {

            justify-content: center;
        }
    </style>
</head>

<body>



    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./Images/carlos-esteves-1MWbwTaeJIA-unsplash.jpg" alt="First slide">
                    <div id="caption">
                        <h5>* only today we offer free shipping.</h5> </br>
                        <h1>FASHION TRENDS</h1> </br>

                        <div class="text-center">
                            <button id="button">
                                <h6>HURRY UP</h6>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="./Images/dollar-gill-qiXkyZLPnXo-unsplash.jpg" alt="First slide">
                    <div id="caption">
                        <h5>* only today we offer free shipping.</h5> </br>
                        <h1>SUMMER COLLECTION</h1> </br>
                        <h1>HERE </h1> </br>
                        <div class="text-center">
                            <button id="button">
                                <h6>HURRY UP</h6>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="./Images/martin-de-arriba-uf_IDewI6iQ-unsplash.jpg" alt="First slide">
                    <div id="caption">
                        <h5>* only today we offer free shipping.</h5> </br>
                        <h1>WOMEN FASHION</h1> </br>

                        <div class="text-center">
                            <button id="button">
                                <h6>HURRY UP</h6>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>


    <section style="width:100%; height:100px;"></section>


</body>


</html>