<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="post" id="adminRegForm" autocomplete="off">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control shadow-none" id="inputFirstName" type="text" placeholder="Enter your first name" require/>
                                                        <label for="inputFirstName">Full Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control shadow-none" id="inputUserName" type="text" placeholder="Enter your last name" require/>
                                                        <label for="inputUserName">User ID</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control shadow-none" id="inputEmail" type="email" placeholder="name@example.com" require/>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control shadow-none" id="inputPassword" type="password" placeholder="Create a password" require/>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <!-- <a class="btn btn-primary btn-block" href="login.html">Create Account</a> -->
                                                    <input type="submit" class="btn btn-primary" name="regBtn" id="regBtnForm" value="Create Account">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
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

    $("#adminRegForm").on("submit",function(e) {
        e.preventDefault()

        name = $("#inputFirstName").val()
        userName = $("#inputUserName").val()
        email = $("#inputEmail").val()
        password = $("#inputPassword").val()
        console.log(name, userName, email, password)

        if(name != "" && userName != "" && email != "" && password != "") {


            $.ajax({
                url: "adminCreate.php",
                type: "POST",
                data: {
                    "name" : name,
                    "email" : email,
                    "username" : userName,
                    "pass": password,
                },
                success: function(data) {
                    console.log(data)
                    if (data == "successfully") {
                        // window.location.replace("adminHome.php")
                        // console.log(massage)
                        $("#msg").text("User Registration Successfully")
                        $("#msg").removeClass("d-none")
                        $('#adminRegForm').trigger("reset");
                    } else {
                        $("#msg").text("User Registration Failed")
                        $("#msg").addClass("alert-danger")
                        $("#msg").removeClass("d-none")
                        $('#adminRegForm').trigger("reset");
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            })

        } else {
            $("#msg").text("Please Enter all the Fields properly")
            $("#msg").addClass("alert-danger")
            $("#msg").removeClass("d-none")
        }
    })


</script>
