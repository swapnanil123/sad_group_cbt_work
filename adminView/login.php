<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container pageWraper">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"> Admin Login</h3></div>

                                    <div class="card-body">
                                        <form method="post" id="userLoginForm" autocomplete="off">
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">User ID</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input type="submit" name="submit" class="btn btn-primary" id="subBtn" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="adminReg.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="massage container ">
                <div class="alert alert-success d-none" id="msg">
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; S.A.D.</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>


<script>

    $("#userLoginForm").on("submit", function(e) {
        e.preventDefault()

        username = $("#inputEmail").val()
        password = $("#inputPassword").val()
        console.log("Working")
        console.log(username, password)
        $.ajax({
            url: "check.php",
            type: "POST",
            data: {
                "username" : username,
                "pass": password,
            },
            success: function(data) {
                console.log(data)
                if (data == "success") {
                    window.location.replace("adminHome.php")
                    console.log(massage)
                    $('#userLoginForm').trigger("reset");
                } else {
                    $("#msg").text("You hava Entered wrong username and password")
                    $("#msg").addClass("alert-danger")
                    $("#msg").removeClass("d-none")
                    $('#userLoginForm').trigger("reset");
                }
            },
            error: function(err) {
                console.log(err)
            }
        })
    })


</script>
