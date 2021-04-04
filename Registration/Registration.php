<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <section>

        <!-- Modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close  aclose" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h5 class=" " id="exampleModalLongTitle">Registration</h5>
                                </div>
                                <form method="POST" action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input required type="email" name="email" class="form-control" id="aemail" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input required type="password" name="password" class="form-control" id="apassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Comfrim Password</label>
                                        <input required type="password" name="comfrimpassword" class="form-control" id="acpassword" placeholder="Password">
                                    </div>
                                    <p class="aerror hidden text-danger">Something Went Wrong. Please Try Again</p>
                                    <div class="form-check">
                                        <br>
                                        <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <div class="text-center">
                                        <button id="registerbtn" type="submit" name="register" class="btn btn-primary">SignUp</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + ";path=/";
        //  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    $(document).ready(function() {
        $(".aerror").hide();
        $("#registerbtn").click(function(event) {
            event.preventDefault();
            var u = $('#aemail').val();
            var p = $('#apassword').val();
            var cp = $('#acpassword').val();
            $.post("", {
                register: "",
                email: "2pm",
                password: "12345"

            });
            //  u = 0;
            // console.log(u);
            if (((p == cp) && (u.length != 0) && (p.length != 0))) {
                setCookie("regUsername", u, 0);
                setCookie("regPassword", p, 0);
                $(".aclose").click();
            } else {
                $(".aerror").show();
            }
        });

    });
</script>
<?php

if (isset($_POST["register"])) {
    //   sleep(2);
    $result = "";
    include('./Database-php/start-mysql-connection.php');
    if ($_POST["password"] == $_POST["comfrimpassword"]) {
        $insert = "INSERT INTO register (email,password) VALUES('{$_POST["email"]}','{$_POST["password"]}') ";
        $result = mysqli_query($connection, $insert);
        if ($result) {
            //    setcookie("regPassword", $_POST["password"]); // 86400 = 1 day
            echo '<script type="text/javascript">  alert("Registered .");  </script>';
        }
    }
    $_POST["register"] = "";
    include('./Database-php/close-mysql-connection.php');
}






?>

</html>