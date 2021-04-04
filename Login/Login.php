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
        <div id="loginModal" class="modal-dialog modal-dialog-centered" role="document">
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
                                <form id="subform" autocomplete="off">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input required type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <p class="error hidden text-danger">Something Went Wrong. Please Try Again</p>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input required type="text" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                    <p class="error hidden text-danger">Something Went Wrong. Please Try Again</p>
                                    <div class="form-check">
                                        <br>
                                        <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label " for="exampleCheck1">Check me out</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" name="submit" id="submit" class="btn btn-primary">Sign-In</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>


            </div>


        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".error").hide();
            $("#logouttext").remove();
            $("#submit").click(function(event) {
                event.preventDefault();

                var username = $('#email').val();
                var password = $('#password').val();
                //console.log(readCookie("regUsername"));
                if (readCookie("regUsername") == username && readCookie("regPassword") == password) {
                    alert("successful login");
                    $(".btn-close").click();
                    $("#logouttext").add();
                    $("#logintext").remove();
                } else {
                    $(".error").show();

                }

                //var formData = $("#subform").serialize();
                /* $.post("./Login/add-new-email.php", formData, function(data, status) {
                     console.log(data);

                 });*/
            });

        });


        // Read cookie
        function readCookie(name) {
            var nameEQ = name + '='
            var ca = document.cookie.split(';')

            for (var i = 0; i < ca.length; i++) {
                var c = ca[i]
                while (c.charAt(0) === ' ') {
                    c = c.substring(1, c.length)
                }
                if (c.indexOf(nameEQ) === 0) {
                    return c.substring(nameEQ.length, c.length)
                }
            }

            return null
        }
        /*
                var username = $("#username").val();
                var password = $("#password").val();
                if (username.length != 0 && password.length != 0) {
                    $.post("./Login/dt.php", {
                        " username": username,
                        "password": password
                    }, function(data, status) {
                        if (data == "record-added" && status == "success") {
                            console.log("---" + data);
                            console.log("---" + status);
                        }
                    });
                } else {

                    $(".error").show();
                }
*/
        //  alert(username + "-" + password);
    </script>
</body>


</html>