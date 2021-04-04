<?php

if (isset($_POST["login"])) {

    include('./Database-php/start-mysql-connection.php');
    if (isset($_POST["password"]) && isset($_POST["email"])) {
        $sql = 'SELECT * FROM register';
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            $i = 0;
            $x = 0;
            while ($rowData = mysqli_fetch_assoc($result)) {
                if (isset($rowData)) {
                    $logid[$i] = $rowData['id'];
                    $email[$i] = $rowData['email'];
                    $password[$i] = $rowData['password'];
                    if (($email[$i] == $_POST["email"]) && ($password[$i] == $_POST["password"])) {
                        echo '<script type="text/javascript"> alert("Login Success ."); </script>';
                        //    header("Location:index.php");
                        break;
                    }

                    $i++;
                }
            }
        }

        include('./Database-php/close-mysql-connection.php');
    } else {
        if (isset($_COOKIE["regemail"]) &&  isset($_COOKIE["regpassword"])) {
            if (($_COOKIE["regemail"] == $_POST["email"]) && ($_COOKIE["regpassword"] == $_POST["password"])) {
                echo '<script type="text/javascript"> alert("Login Success ."); </script>';
                // header("Location:index.php");
            }
        }
    }
}


?>

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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h5 class=" " id="exampleModalLongTitle">Login</h5>
                                </div>
                                <form method="GET" action="" onsubmit="(e)=>{ e.preventDefault(); return false;}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input required type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <br>
                                        <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="login" class="btn btn-primary">SignIn</button>
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
<script>
    $(document).ready(function() {
        $('#login_button').click(function() {
            var username = $('#username').val();
            var password = $('#password').val();
            if (username != '' && password != '') {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        //alert(data);  
                        if (data == 'No') {
                            alert("Wrong Data");
                        } else {
                            $('#loginModal').hide();
                            location.reload();
                        }
                    }
                });
            } else {
                alert("Both Fields are required");
            }
        });
        $('#logout').click(function() {
            var action = "logout";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function() {
                    location.reload();
                }
            });
        });
    });
</script>

</html>