<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



        /**------------------------ */
        #section2 .container-fluid {
            padding: 0;
            margin: 0;
            width: 100%;
        }

        #section2 .container-fluid .row {
            padding: 0;
            margin: 0;
            width: 100%;
        }



        #section2 #right1 {
            background-image: url(./Carosal/j.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 500px;
            /*
            width: 100%;
            height: 500px;
           */
        }



        #section2 #left1 {
            background-image: url(./Carosal/pp.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 500px;
            /*
            width: 100%;
            height: 500px;
           */
            /** #left,   position: relative;*/
        }

        /** #left,  background-color: rgb(255, 102, 178, 0.5); 
         position: absolute;
            z-index: 5;*/
        #section2 #left,
        #section2 #right {

            cursor: pointer;
            width: 100%;
            height: auto;
            padding: 0;
            top: 0;
            color: white;
            overflow: hidden;
        }


        #section2 #left h1,
        #section2 #right h1 {
            font-size: 90px;
            font-weight: bolder;
            padding: 0;
            font-family: 'Akaya Telivigala', cursive;
        }


        #section2 #right h1:hover {
            font-size: 80px;
            font-weight: bolder;

        }


        #section2 #left h1:hover {
            font-size: 80px;
            font-weight: bolder;

        }

        #section2 #button {
            width: 250px;
            height: 60px;
            background-color: transparent;
            color: white;
            font-size: 12px;
            border: 2px solid white;

        }

        #section2 #button:hover {
            width: 250px;
            height: 60px;
            background-color: black;

            color: white;
            font-size: 12px;
            border: 2px solid white;
            cursor: pointer;
            opacity: 0.7;
        }

        #section2 #left button,
        #section2 #right button {

            justify-content: center;
        }

        /***------------------ */
        #section2 #left {
            width: 100%;
            height: 100%;
            transition: transform .9s;
            /* Animation */
        }

        #section2 #left:hover {
            transform: scale(0.75);
            /* Animation */
        }

        #section2 #right {
            width: 100%;
            height: 100%;
            transition: transform .9s;
            /* Animation */
        }

        #section2 #right:hover {
            transform: scale(0.75);
            /* Animation */
        }

        #section2 #left1 {
            width: 100%;
            height: 100%;
            transition: transform .9s;
            /* Animation */
        }

        #section2 #left1:hover {
            transform: scale(0.75);
            /* Animation */
        }

        #section2 #right1 {
            width: 100%;
            height: 100%;
            transition: transform .9s;
            /* Animation */
        }

        #section2 #right1:hover {
            transform: scale(0.75);
            /* Animation */
        }
    </style>

</head>

<body>
    <section id="section2">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">
                    <div id="left1">
                        <div id="left">
                            <h5>ON ACCESORIES</h5> </br>
                            <h1>SALE</h1> </br>
                            <h1>30 % </h1> </br>
                            <div class="text-center">
                                <button id="button">
                                    <h6>SHOP NOW</h6>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="right1">
                        <div id="right">
                            <h5>YOUR FUTURE </h5> </br>
                            <h1>JEWELLERS</h1> </br>
                            <h1>HERE </h1> </br>
                            <div class="text-center">
                                <button id="button">
                                    <h6>SHOP NOW</h6>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
</body>

</html>