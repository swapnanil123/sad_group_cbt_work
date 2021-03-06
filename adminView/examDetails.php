<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Exam Details</title>
        <link href="styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="./../adminView/adminHome.php">Admin Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!--<div class="sb-sidenav-menu-heading"></div> for any option -->
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!--<div class="sb-sidenav-menu-heading">Interface</div>for any option -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Components
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Result</a>
                                    <a class="nav-link" href="#">User List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="questionInput.php" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Questions
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <!--page 1 collpse content
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    -->
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Page 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <!--page 2 collpse content
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                    -->
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        &copy; S.A.D.
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Exam Details</h1>
                        <div class="row">
                        	<div id="layoutAuthentication">
					            <div id="layoutAuthentication_content">
					                <main>
					                    <div class="container">
					                        <div class="row justify-content-center">
					                            <div class="col-lg-5">
					                                <div class="card shadow-lg border-0 rounded-lg mt-5">
					                                    <div class="card-header"><h3 class="text-center font-weight-light my-4" id="examName"></h3></div>
					                                    <div class="card-body">
					                                        <form id="examCreateForm" autocomplete="off" >
					                                            <div class="form-floating mb-3">
					                                                <input class="form-control shadow-none" id="paperName" type="text" placeholder="name@example.com" required />
					                                                <label for="paperName">Paper Name</label>
					                                            </div>
					                                            <div class="form-floating mb-3">
					                                                <input class="form-control shadow-none" id="paperCode" type="text" placeholder="Password" required />
					                                                <label for="paperCode">Paper Code</label>
					                                            </div>
					                                            <select id="totalNoQtn" class="form-select form-select-sm mb-3 shadow-none">
																  <option selected disabled>Total number of questions</option>
																  <option value="10">10</option>
																  <option value="20">20</option>
																  <option value="30">30</option>
																</select>

																<select id="duration" class="form-select form-select-sm shadow-none">
																  <option selected disabled>Time in minutes</option>
																  <option value="10">10 min</option>
																  <option value="20">20 min</option>
																  <option value="30">30 min</option>
																</select>
					                                            
					                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
					                                                
					                                                <!-- <a class="btn btn-primary" href="index.html">Submit</a> -->
                                                                    <input type="submit" class="btn btn-primary shadow-none" name="submitBtn" id="formSubmit" value="Submit">
					                                            </div>
					                                        </form>
					                                    </div>
					                                    <div class="card-footer text-center py-3">
					                                        <div class="small"><a href="adminHome.php">Admin Panel</a></div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </main>
					            </div>
					            <div id="layoutAuthentication_footer">
					                <footer class="py-4 bg-light mt-auto">
					                    <div class="container-fluid px-4">
					                        <div class="d-flex align-items-center justify-content-between small">
					                            <div class="text-muted">Copyright &copy; SAD</div>
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
					    </div>
					</div>
				</main>
			</div>
		</div>
	</body>
</html>



<script>


    url = $(location).attr('href');
    // console.log(url)
    splitUrl = url.split('/')
    subject= splitUrl[splitUrl.length - 1]
    subName = subject.replace("#"," ")
    console.log(subName)


    $("#examName").text(subName)

    $("#examCreateForm").on("submit", function(e) {
        e.preventDefault()

        paperName = $("#paperName").val()
        paperCode = $("#paperCode").val()
        totalNumberOfQtn = $("#totalNoQtn").val()
        examDuration = $("#duration").val()

        console.log(paperName, paperCode, totalNumberOfQtn, examDuration)

        if (totalNumberOfQtn === null && examDuration === null) {

            alert("Please Enter All the Fields Properly")

        } else {
            $.ajax({
                url: "examCreate.php",
                type: "POST",
                data: {
                    "subject": subName,
                    "paperName": paperName,
                    "paperCode" : paperCode,
                    "totNoQtn": totalNumberOfQtn,
                    "duration": examDuration,
                },
                success: function(data) {
                    console.log(data)
                    if ( data == "successfully") {
                        $('#examCreateForm').trigger("reset");
                        alert("Exam Create Successfully")

                        subjectName = subName.replace(" ","#")
                        paperName = paperName.replace(" ","#")

                        window.location.href = "questionEntry.php?"+ "/" +subjectName + "/" + paperName + "/" + paperCode ;


                    }else {
                        alert("Exam Create Unsuccessfull")
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            })
        }
    })

</script>
